<?php

namespace App\Http\Controllers\V1;

use App\Models\Ticket;
use App\Models\Category;
use App\Models\TicketLog;
use App\Models\TicketReply;
use Illuminate\Http\Request;
use App\Models\TicketAttachment;
use Illuminate\Support\Facades\DB;
use Flasher\Prime\FlasherInterface;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Repositories\TicketRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\TicketLogRepository;
use App\Repositories\TicketReplyRepository;
use App\Repositories\TicketAttachmentRepository;

class TicketController extends Controller
{
    protected $ticketRepository;
    protected $categoryRepository;
    protected $ticketAttachmentRepository;
    protected $ticketLogRepository;
    protected $ticketReplyRepository;


    public function __construct(
        TicketRepository $ticketRepository,
        CategoryRepository $categoryRepository,
        TicketAttachmentRepository $ticketAttachmentRepository,
        TicketLogRepository $ticketLogRepository,
        TicketReplyRepository $ticketReplyRepository
    ) {
        $this->ticketRepository = $ticketRepository;
        $this->categoryRepository = $categoryRepository;
        $this->ticketAttachmentRepository = $ticketAttachmentRepository;
        $this->ticketLogRepository = $ticketLogRepository;
        $this->ticketReplyRepository = $ticketReplyRepository;
    }





    public function index()
    {
        $tickets = $this->ticketRepository->getUserTickets(1);
        $categories = $this->categoryRepository->getAllCategories();

        return view('ticketing.index', compact('tickets', 'categories'));
    }


    public function store(Request $request)
    {

        try {
            DB::beginTransaction();

            $ticket =  $this->ticketRepository->create([
                'UserID' => 1,
                // 'UserID' => Auth::user()->id,
                'OfficerID' => 1,
                'CategoryID' => $request->Category,
                'Title' => $request->Title,
                'Description' => $request->Description,
                'ReplyID' => $request->ReplyID,
            ]);
            if (isset($request->File)) {
                $file = $request->file('File');
                $path = $file->store('Files', 'public');
                $this->ticketAttachmentRepository->create([
                    'TicketID' =>  $ticket->id,
                    'File' => $path,
                    'ReplyID' => $request->ReplyID,
                ]);
            }
            $this->ticketLogRepository->create([
                'UserID' => 1,
                // 'UserID' => Auth::user()->id,
                'TicketID' =>  $ticket->id,
                'Action' => 'create',
                'Description' => 'ایجاد تیکت',
            ]);
            DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            flash()->error('مشکل در ذخیره سازی دوباره تلاش کنید');
            return redirect()->back();
        }
        flash()->success('تیکت شما با موفقیت ثبت شد!');

        return redirect()->route('Ticket.user.list');
    }

    /**
     * Display the specified resource.
     */
    public function singleTicket(string $id)
    {
        $ticket = $this->ticketRepository->findById($id);

        $dataTicket = json_decode($ticket);
        return response()->json($dataTicket);
    }


    public function reply(Request $request, string $id)
    {
        $ticket = $this->ticketRepository->findById($id);
        if (!$ticket) {
            flash()->error('تیکت پیدا نشد');
            return redirect()->back();
        }
        // if($ticket->UserID == Auth::user()->id){
        //     flash()->error('خطا در احراز هویت');
        //     return redirect()->back();
        // }
        try {
            DB::beginTransaction();
            $ticketReply =  $this->ticketReplyRepository->create([
                'TicketID' =>  $ticket->id,
                'UserID' => 1,
                // 'UserID' => Auth::user()->id,
                'Message' => $request->Message,
            ]);


        //    $this->ticketRepository->updateStatus($ticket->id ,[
        //         'Status' => 'userReply',
        //     ]);
            $this->ticketLogRepository->create([
                'UserID' => 1,
                // 'UserID' => Auth::user()->id,
                'TicketID' =>  $ticket->id,
                'Action' => 'reply',
                'Description' => 'ریپلای تیکت',
            ]);
            if (isset($request->File)) {
                $file = $request->file('File');
                $path = $file->store('Files', 'public');
                $ticketAttachment = $this->ticketAttachmentRepository->create([
                    'TicketID' =>  $ticket->id,
                    'File' => $path,
                ]);
               $this->ticketAttachmentRepository->update( $ticketAttachment->id ,[
                    'ReplyID' => $ticketReply->id,
                ]);

            }
            DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            flash()->error('مشکل در ذخیره سازی دوباره تلاش کنید');
            return redirect()->back();
        }
        flash()->success('تیکت شما با موفقیت ثبت شد!');
        return redirect()->route('Ticket.user.list');
    }

   
}
