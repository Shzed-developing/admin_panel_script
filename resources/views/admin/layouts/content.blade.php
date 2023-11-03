@extends('admin.master')

@section('content')
<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        {{ $breadcrumb }}
                    </ol>
                </div>
                <h4 class="page-title">{{ $title }}</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    {{ $slot }}
</div>
<!-- container -->
</div>
@endsection

@section('script')
    {{ $script ?? '' }}
@endsection

@section('head')
    {{ $head ?? '' }}
@endsection
