@component('admin.layouts.content', ['title' => 'لیست محصولات'])

    @slot('breadcrumb')
        <li class="breadcrumb-item active"><a href="/admin">پنل مدیریت</a></li>
        <li class="breadcrumb-item active">لیست محصولات</li>

    @endslot

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">محصولات</h4>
                    <p class="sub-header">
                        از این قسمت محصولات خود را مدیریت کنید.
                    </p>

                    <div class="mb-2">
                        <div class="row row-cols-sm-auto g-2 align-items-center">
                            <div class="col-12 text-sm-center">

                                @can('create-product')
                                    <a href="{{ route('admin.products.create') }}" class="btn btn-primary"><i class="mdi mdi-plus-circle me-2"></i> ایجاد محصول جدید</a>
                                @endcan

                            </div>
                            <form action="">
                                <div class="col-12">
                                    <input type="text" name="search" placeholder="جستجو..." class="form-control float-right" value="{{ request('search') }}">
                                </div>
                            </form>
                        </div>
                    </div>

                    <table id="demo-foo-addrow" class="table table-centered table-striped table-bordered mb-0 toggle-circle default footable-loaded footable" data-page-size="7">
                        <thead>
                            <tr>
                                <th data-sort-initial="true" data-toggle="true" class="footable-visible footable-sortable footable-sorted">آیدی محصول<span class="footable-sort-indicator"></span></th>
                                <th class="footable-visible footable-sortable">نام محصول<span class="footable-sort-indicator"></span></th>
                                <th class="footable-visible footable-sortable">تعداد موجودی<span class="footable-sort-indicator"></span></th>
                                {{-- <th data-hide="phone, tablet" class="footable-visible footable-last-column footable-sortable">تعداد نظرات<span class="footable-sort-indicator"></span></th> --}}
                                <th class="footable-visible footable-sortable">تعداد بازدید<span class="footable-sort-indicator"></span></th>
                                <th data-sort-ignore="true" class="min-width footable-visible footable-first-column">اقدامات</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($products as $product)
                                <tr class="footable-even" style="">
                                    <td class="footable-visible"><span class="footable-toggle">{{ $product->id }}</span></td>
                                    <td class="footable-visible">{{ $product->title }}</td>
                                    <td class="footable-visible">{{ $product->inventory }}</td>
                                    <td class="footable-visible">{{ $product->view_count }}</td>

                                    
                                    <td class="text-center footable-visible footable-first-column d-flex">
                                        
                                        @can('delete-product')

                                            <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')


                                                <button type="submit" class="btn btn-danger btn-xs btn-icon">حذف</button>
                                            </form> 

                                        @endcan 

                                            
                                        @can('edit-product')

                                            <span> . </span>
                                            <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-primary btn-xs btn-icon">ویرایش</a>

                                        @endcan

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>

@endcomponent