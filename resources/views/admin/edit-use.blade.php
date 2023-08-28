@extends('layouts.admin')

@section('content')
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">


                    <h5 class="mb-4">تعديل استخدام</h5>


                    <div class="card mb-4">
                        <div class="card-body">
                            <form dir="rtl" method="post" action="{{URL('/edit-how-use-two-'.$id)}}" style="width: 75%" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">arاسم الاستخدام</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{$data->title_ar}}" class="form-control" required id="inputPassword" name="title_ar">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">enاسم الموقع</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{$data->title_en}}" class="form-control" required id="inputPassword" name="title_en">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">رابط اليوتيوب</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{$data->link}}" class="form-control" required id="inputPassword" name="link">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="formFile" class="col-sm-2 col-form-label">الصورة</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="file" id="formFile" name="logo" accept=".jpg,.jpeg,.png">
                                        <input hidden type="text" name="old_logo" value="{{$data->logo}}">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="formFile" class="col-sm-2 col-form-label">الوصف بالانجليزية</label>
                                    <div class="col-sm-10">
                                        <textarea name="desc_en" class="form-control">{{$data->desc_en}}</textarea>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="formFile" class="col-sm-2 col-form-label">الوصف بالعربية</label>
                                    <div class="col-sm-10">
                                        <textarea name="desc_ar" class="form-control">{{$data->desc_ar}}</textarea>
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

