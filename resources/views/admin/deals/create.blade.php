@extends('layouts.admin')


@section('content')
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">


                    <h5 class="mb-4">انشاء ميزة جديدة</h5>


                    <div class="card mb-4">
                        <div class="card-body">

                            <form method="post" action="{{URL('/create-vantages')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="tooltip-center-top position-relative form-group">
                                    <label>الايقونة</label>
                                    <input name="image" required type="file" class="form-control" id="formFile" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">
                                </div>

                                <div class="tooltip-center-top position-relative form-group">
                                    <label>الاسم بالعربية</label>
                                    <input name="name_ar" required id="client_email" type="text" class="form-control">
                                </div>

                                <div class="tooltip-center-top position-relative form-group">
                                    <label>الاسم بالانجليزية</label>
                                    <input name="name_en" required id="client_email" type="text" class="form-control">
                                </div>

                                <div class="tooltip-center-top position-relative form-group">
                                    <label>الوصف بالعربية</label>
                                    <input name="desc_ar" required id="client_email" type="text" class="form-control">
                                    <div class="invalid-tooltip">E-mail</div>
                                </div>

                                <div class="tooltip-center-top position-relative form-group">
                                    <label>الوصف بالانجليزية</label>
                                    <input name="desc_en" required id="client_email" type="text" class="form-control">
                                    <div class="invalid-tooltip">E-mail</div>
                                </div>

                                <button class="btn btn-primary mt-5" type="submit">تاكيد</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
