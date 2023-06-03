@extends('Admin.layout')

@section('Content')
<div class="row">
    <div class="col-lg-12">
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">إضاقة منشور جديد</h3>
            </div>
            <!--begin::Form-->
            <form action="/category/update/{{$category->id}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>اسم التصنيف</label>
                            <input  type="text" name="name" value="{{old('name',$category->name)}}" class="form-control" />
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
@section('my-scripts')
<script src="{{asset('assets_Admin/plugins/custom/ckeditor/ckeditor-classic.bundle.js')}}"></script>
<script src="{{asset('assets_Admin/js/pages/crud/forms/editors/ckeditor-classic.js')}}"></script>
<script src="{{asset('assets_Admin//js/pages/crud/forms/widgets/select2.js')}}"></script>
@endsection
							
@endsection