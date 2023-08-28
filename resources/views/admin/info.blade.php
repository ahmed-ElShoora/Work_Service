@extends('layouts.admin')

@section('content')
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">


                    <h5 class="mb-4">التحكم بالصفحة معلومات عن التطبيق</h5>


                    <div class="card mb-4">
                        <div class="card-body">
                            <form dir="rtl" method="post" action="{{URL('/info')}}" style="width: 75%" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 row">
                                    <label for="formFile" class="col-sm-2 col-form-label">الصورة</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="file" id="formFile" name="logo" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">
                                        <input hidden type="text" name="logo_old" required value="{{$data->logo}}">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="formFile" class="col-sm-2 col-form-label">الوصف بالعربية</label>
                                    <div class="col-sm-10">
                                        <textarea id="summernote" name="desc_ar">{{$data->desc_ar}}</textarea>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="formFile" class="col-sm-2 col-form-label">الوصف بالانجليزية</label>
                                    <div class="col-sm-10">
                                        <textarea id="summernote1" name="desc_en">{{$data->desc_en}}</textarea>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success">حفظ</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


@endsection
@section('script')

    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
        $(document).ready(function() {
            $('#summernote1').summernote();
        });
    </script>


@endsection
