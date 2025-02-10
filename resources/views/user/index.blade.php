@extends('templates.ticket')
@section('send_ticket')
    <div class="col-md-3 app-sidebar">
        <div class="card">
            <div class="card-body">
                <button class="btn btn-secondary btn-block" data-toggle="modal" data-target="#compose">
                    ارسال ایمیل
                </button>
            </div>
            <div class="app-sidebar-menu">
                <div class="list-group list-group-flush">
                    <a href="{{ asset('#') }}" class="list-group-item active d-flex align-items-center">
                        <i data-feather="mail" class="mr-2 width-15 height-15"></i>
                        صندوق ورودی
                        <span class="small ml-auto">14</span>
                    </a>
                    <a href="{{ asset('#') }}" class="list-group-item">
                        <i data-feather="send" class="mr-2 width-15 height-15"></i>
                        ارسال شده
                    </a>
                    <a href="{{ asset('#') }}" class="list-group-item">
                        <i data-feather="edit-3" class="mr-2 width-15 height-15"></i>
                        ذخیره
                    </a>
                    <a href="{{ asset('#') }}" class="list-group-item d-flex align-items-center">
                        <i data-feather="star" class="mr-2 width-15 height-15"></i>
                        شروع شده
                        <span class="small ml-auto">10</span>
                    </a>
                    <a href="{{ asset('#') }}" class="list-group-item">
                        <i data-feather="info" class="mr-2 width-15 height-15"></i>
                        اسپم
                    </a>
                    <a href="{{ asset('#') }}" class="list-group-item d-flex align-items-center">
                        <i data-feather="trash" class="mr-2 width-15 height-15"></i>
                        سطل آشغال
                        <span class="small ml-auto">2</span>
                    </a>
                </div>
                <div class="card-body">
                    <h6 class="mb-0">برچسب‌ها</h6>
                </div>
                <div class="list-group list-group-flush">
                    <a href="{{ asset('#') }}" class="list-group-item d-flex align-items-center">
                        <span class="text-warning fa fa-circle mr-2"></span>
                        پشتیبانی
                        <span class="small ml-auto">5</span>
                    </a>
                    <a href="{{ asset('#') }}" class="list-group-item d-flex align-items-center">
                        <span class="text-success fa fa-circle mr-2"></span>
                        آزاد
                    </a>
                    <a href="{{ asset('#') }}" class="list-group-item d-flex align-items-center">
                        <span class="text-danger fa fa-circle mr-2"></span>
                        اجتماعی
                    </a>
                    <a href="{{ asset('#') }}" class="list-group-item d-flex align-items-center">
                        <span class="text-info fa fa-circle mr-2"></span>
                        دوستان
                    </a>
                    <a href="{{ asset('#') }}" class="list-group-item d-flex align-items-center">
                        <span class="text-secondary fa fa-circle mr-2"></span>
                        کدزدن
                    </a>
                </div>
            </div>
        </div>
    </div>
@endSection

@section('listOfTicket')
    <div class="col-md-9 app-content">

        <div class="card card-body app-content-body">
            <div class="app-lists">
                <ul class="list-group list-group-flush">
                    @foreach ($tickets as $ticket)
                        <li class="list-group-item" onclick="touch({{ $ticket->id }})">
                         
                            <div>
                                <a href="{{ asset('#') }}" class="add-star mr-3" title="محبوب کردن">
                                    <i class="fa fa-star-o font-size-16"></i>
                                </a>
                            </div>
                            <div>
                                <figure class="avatar avatar-sm mr-3">
                                    <img src="{{ asset('assets/media/image/user/user.png') }}" class="rounded-circle"
                                        alt="image">
                                </figure>
                            </div>
                            <div class="flex-grow-1 min-width-0">
                                <div class="mb-1 d-flex justify-content-between align-items-center">
                                    <div class="text-truncate app-list-title"> {{ $ticket->user->Name }} </div>
                                    <div class="pl-3 d-flex">
                                        <span class="text-nowrap text-muted">{{ $ticket->created_at_jalali }}</span>
                                        <div class="dropdown ml-3">

                                        </div>
                                    </div>
                                </div>
                                <div class="text-muted d-flex justify-content-between">
                                    <div class="text-truncate small">{{ $ticket->Title }}</div>
                                    <div class="text-nowrap pl-3">
                                        <ul class="list-inline">
                                            <li class="list-inline-item mb-0">
                                                @if ($ticket->Status == 'reply')
                                                    <i class="fa fa-circle text-danger"></i>
                                                @endif

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <!-- end::app-lists -->

            <!-- begin:app-detail -->
            <div class="card app-detail">
                <div class="card-header">
                    <div class="app-detail-action-left">
                        <a class="app-detail-close-button" href="{{ asset('#') }}" onclick="clearContent()">
                            <i data-feather="arrow-left" class="mr-3"></i>
                        </a>
                    </div>
                </div>
                <div class="app-detail-article">
                    <div class="card-body">
                        <div class="d-flex align-items-center p-l-r-0 m-b-20">
                            <div class="d-flex align-items-center">
                                <figure class="avatar avatar-sm m-r-15">
                                    <img src="{{ asset('assets/media/image/user/women_avatar5.jpg') }}"
                                        class="rounded-circle" alt="image">
                                </figure>
                                <div>
                                    <h6 class="m-b-0">
                                        <span class="text-primary" id="namePHP"> </span>
                                        {{-- <span class="d-sm-inline d-none text-muted"> &lt;elnora@gmail.com&gt;</span> --}}
                                    </h6>
                                    {{-- <span class="small text-muted">به مهرانا بخشنده</span> --}}
                                </div>
                            </div>
                            <div class="ml-auto">

                                <span class="text-muted" id="timePHP"></span>
                            </div>
                        </div>
                        <h3>
                            <span class="text-muted" id="titerPHP"></span>
                        </h3>
                        <span class="text-primary" id="TextPHP"></span>
                    </div>

                    <div class="card-body d-none" id="containerFilePHP">
                        <h6 class="mb-3 font-size-11 text-uppercase">فایلهای پیوست شده</h6>
                        <ul class="list-unstyled mb-0">
                            <li class="small">
                                <a href="" id="FilePHP" target="_blank">
                                    <i data-feather="paperclip" class="mr-1 width-15 height-15"></i>
                                    File
                                </a>
                            </li>
                        </ul>
                    </div>


                    <div id="repliesContainer"></div>


                    <hr class="m-0">
                    <div class="card-body">
                        <h6 class="mb-3 font-size-11 text-uppercase">پاسخ</h6>

                        <form action="" id="formReplyPHP" method="POST" enctype="multipart/form-data">
                            @csrf


                            <div class="form-group">
                                <div class="custom-file">
                                    <input name="File" type="file" class="custom-file-input" multiple
                                        id="customFileLangHTML">
                                    <label class="custom-file-label" for="customFileLangHTML" data-browse="انتخاب فایل">
                                        انتخاب فایل</label>
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">توضیحات</label>
                                    <textarea class="form-control" name="Message" id="exampleFormControlTextarea1" rows="3" required></textarea>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-primary">
                                        <i data-feather="send" class="mr-2"></i>
                                        ارسال
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endSection

@section('model_send_ticket')
    <div class="modal fade" tabindex="-1" role="dialog" id="compose">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">ارسال تیکت</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="ti-close"></i>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{ route('Ticket.user.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <select name="Category" class="form-control form-control-sm mb-3" required>
                            <option disabled selected>لطفا انتخاب کنید </option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->Name }}</option>
                            @endforeach
                        </select>


                        <div class="form-group ml-1">
                            <input name="Title" type="text" class="form-control" placeholder="موضوع" required>
                        </div>
                        <div class="form-group">
                            <div class="custom-file">
                                <input name="File" type="file" class="custom-file-input" multiple
                                    id="customFileLangHTML">
                                <label class="custom-file-label" for="customFileLangHTML" data-browse="انتخاب فایل">
                                    انتخاب فایل</label>
                            </div>
                        </div>
                        <div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">توضیحات</label>
                                <textarea class="form-control" name="Description" id="exampleFormControlTextarea1" rows="3" required></textarea>
                            </div>
                            {{-- <div class="compose-quill-editor mb-3"></div> --}}
                            <div class="d-flex justify-content-between">

                                <button class="btn btn-primary">
                                    <i data-feather="send" class="mr-2"></i>
                                    ارسال
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endSection
@section('scripts')
    <script>
        function touch(id) {

            document.getElementById("formReplyPHP").action = window.location.origin + '/Ticket/reply/' + id;
            $.ajax({
                url: "singleTicket/" + id,
                type: "POST",
                data: {
                    _token: $('meta[name="csrf-token"]').attr("content")
                },
                success: function(result) {
                    document.getElementById("containerFilePHP").classList.add('d-none');
                    document.getElementById("namePHP").textContent = result.user.Name
                    document.getElementById("TextPHP").textContent = result.Description
                    document.getElementById("titerPHP").textContent = result.Title
                    document.getElementById("timePHP").textContent = result.created_at_jalali
                    if (result.ticket_atachment.length > 0 && result.ticket_atachment[0].ReplyID == null) {
                        document.getElementById('containerFilePHP').classList.remove('d-none');
                        document.getElementById("containerFilePHP").classList.add('card-body');
                        document.getElementById("FilePHP").href = window.location.origin + '/storage/' + result
                            .ticket_atachment[0].File;
                    }
                    if (result.ticket_reply.length > 0) {

                        let container = document.getElementById("repliesContainer");
                        container.innerHTML = "";

                        result.ticket_reply.forEach(reply => {
                            let div = document.createElement("div");
                            div.className = "card-body";

                            // قالب اصلی ریپلای
                            div.innerHTML = `
        <hr class="m-0">
        <div class="d-flex align-items-center p-l-r-0 m-b-20">
            <div class="d-flex align-items-center">
                <figure class="avatar avatar-sm m-r-15">
                    <img src="{{ asset('assets/media/image/user/women_avatar5.jpg') }}" class="rounded-circle" alt="image">
                </figure>
                <div>
                    <h6 class="m-b-0">
                        <span class="text-primary">${reply.UserID === 1 ? result.user.Name : "اپراتور"}</span>
                    </h6>
                </div>
            </div>
            <div class="ml-auto">
                <span class="text-muted">${reply.created_at_jalali || "بدون تاریخ"}</span>
            </div>
        </div>

        <span class="text-primary">${reply.Message || "بدون پیام"}</span>
    `;

                            // بررسی وجود فایل پیوست‌شده
                            let attachments = result.ticket_atachment.filter(file => file.ReplyID ===
                                reply.id);

                            if (attachments.length > 0) {
                                let attachmentDiv = document.createElement("div");
                                attachmentDiv.className = "card-body";

                                let attachmentHTML = `
            <h6 class="mb-3 font-size-11 text-uppercase">فایل‌های پیوست‌شده</h6>
            <ul class="list-unstyled mb-0">
        `;

                                attachments.forEach(file => {
                                    attachmentHTML += `
                <li class="small">
                    <a href="/storage/${file.File}" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-paperclip mr-1 width-15 height-15"><path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"></path></svg>
                        File
                    </a>
                </li>
            `;
                                });

                                attachmentHTML += `</ul>`;
                                attachmentDiv.innerHTML = attachmentHTML;
                                div.appendChild(attachmentDiv);
                            }

                            // اضافه کردن div به container
                            container.appendChild(div);
                        });



                    }

                }
            });

        }

        function clearContent() {
                document.getElementById("namePHP").textContent = "";
                document.getElementById("TextPHP").textContent = "";
                document.getElementById("titerPHP").textContent = "";
                document.getElementById("timePHP").textContent = "";
                document.getElementById("containerFilePHP").classList.add('d-none');
                document.getElementById("FilePHP").href = "#";
                document.getElementById("repliesContainer").innerHTML = "";
            }
    </script>
@endSection
