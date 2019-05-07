@php
    $types = \App\Http\Controllers\InquiryController::inquiryTypes();
@endphp

<section class="qac-inquiry" id="inquiry">
    <div class="d-flex justify-content-center">

        <div class="col-lg-5 col-12">
            <div class="text-center">
                <div class="h3 title">Изпратете ни запитване</div>
                <p>Моля, попълнете формата за запитване и ние ще Ви отговорим в най-кратки срокове</p>
            </div>
            <div class="card form-box">
                <div class="card-body">
                    <form method="POST" action="{{ route('inquiry.store') }}">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="form-name">Лице за контакт <span class="required">*</span></label>
                                <input name="contact_person" type="text" class="form-control" id="form-name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="form-company">Фирма</label>
                                <input name="company" type="text" class="form-control" id="form-company">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="form-phone">Телефон <span class="required">*</span></label>
                                <input name="phone" type="text" class="form-control" id="form-phone" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="form-email">E-mail <span class="required">*</span></label>
                                <input name="email" type="email" class="form-control" id="form-email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="form-subject">Отностно <span class="required">*</span></label>
                            <select name="subject" id="form-subject" class="form-control" required>
                                <option value="" selected disabled hidden>Изберете...</option>
                                @foreach($types as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="form-body">Запитване</label>
                            <textarea name="body" class="form-control" id="form-body" required></textarea>
                        </div>
                        <input type="hidden" name="recaptcha" id="recaptcha">
                        <button type="submit" class="btn btn-primary">Изпращане</button>
                    </form>
                    <script src="https://www.google.com/recaptcha/api.js?render=6Lc8KqIUAAAAAJnSq1qQ96kRq3rDunC39gN0wNSI"></script>
                    <script>
                        grecaptcha.ready(function() {
                            grecaptcha.execute('6Lc8KqIUAAAAAJnSq1qQ96kRq3rDunC39gN0wNSI', { action: 'recaptcha' }).then(function(token) {
                                if(token) {
                                    document.getElementById('recaptcha').value = token;
                                }
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</section>