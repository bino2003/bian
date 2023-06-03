@extends('Admin.layout')

@section('Content')
<div class="row">
    <div class="col-lg-12">
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">إضاقة كتاب جديد</h3>
            </div>
            <!--begin::Form-->
            <form action="/book/store" method="post" enctype="multipart/form-data">
                @csrf
                <p id="error-msg" style="opacity: 1;">
                    <!-- <div class="alert alert-warning">*Please enter a Name*</div> -->
                  </p>
                  <div id="simple-msg"></div>
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>اسم الكتاب</label>
                            <input value="{{old('name')}}" type="text" name="name" class="form-control" />
                        </div>
                        <div class="col-lg-6">
                            <label>اسم الكاتب</label>
                            <input value="{{old('author')}}" type="text" name="author" class="form-control" />
                        </div>
                        <div class="col-lg-6">
                            <label> تاريخ الاصدار</label>
                            <input value="{{old('release_date')}}" type="date" name="release_date" class="form-control" />
                        </div>
                        <div class="col-lg-6">
                            <label>التصنيف</label>
                            <select  name="category_id"class="form-control selectpicker" data-live-search="true" name="param">
                                @foreach($category as $category)
                                <option value="{{$category->id}}" 
                                {{old('category') == $category->id ? 'selected' : ''}}
                                >{{$category->name}}</option>

                                @endforeach
                              
                                
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label>السعر </label>
                            <input value="{{old('price')}}" type="text" name="price" class="form-control" />
                        </div>
                        <div class="col-lg-6">
                            <label>مرات الشراء </label>
                            <input value="{{old('purchase_number')}}" type="text" name="purchase_number" class="form-control" />
                        </div>
                       
                        <div class="col-lg-6 mt-5">
                            <label>صورة الكتاب</label>
                            <div class="custom-file">
                                <input value="{{old('image')}}" name="image" type="file" class="custom-file-input" id="customFileLang" lang="ar">
                                <label class="custom-file-label" for="customFileLang">اختر الصورة</label>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-5">
                            <label>نسخة الكتاب </label>
                            <div class="custom-file">
                                <input value="{{old('book_copy')}}" name="book_copy" type="file" class="custom-file-input" id="customFileLang" lang="ar">
                                <label class="custom-file-label" for="customFileLang">اختر الملف</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-12">
                            <label> التفاصيل</label>
                            <div class="card-body">
                                <textarea  name="description" id="kt-ckeditor-1">
                                {{old('description')}}
                                </textarea>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-10 mt-10">
                        <button type="submit" class="btn btn-success mr-2">حفظ</button>
                    </div>
                </div>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Card-->
    </div>
</div>
@endsection