<form action="{{ route('signVolunteer') }}" method="post">
    @csrf

    <div class="col-md-100">
        <div class="card mb-4 box-shadow shadow-lg " style="direction: rtl;">
            <div class="card-body">
                <p class="card-text">
                <div class="display-7 fw-bold text-center"> {{ $agencyName }}
                </div>
                <br />
                <div class="display-7 text-center "> {{ $agencyDesc }}</div>
                <br />
                </p>

                <input type="hidden" class="form-control" id="agencyId" name="agencyId" value="{{ $agencyId }}">
                <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{ $userId }}">


                <div class="mb-3">
                    <label for="fullname" class="form-label mb-4 px-4 text-end"> اسم المتطوع </label>
                    <input type="text" class="form-control @error('fullname') is-invalid @enderror" id="fullname"
                        name="fullname" value="{{ $userName }}">
                    @error('fullname')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label px-4">الايميل</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                        name="email" value="{{ $userEmail }}">
                    @error('email')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="mobile" class="form-label px-4">رقم الجوال</label>
                    <input type="text" class="form-control @error('mobile') is-invalid @enderror" id="mobile"
                        name="mobile" value="{{ $userMobile }}">
                    @error('mobile')
                        <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-sm-flex justify-content-sm-center mb-2">
                    <button type="submit" class="btn btn-primary">التسجيل</button>
                </div>
            </div>

        </div>
    </div>


</form>
