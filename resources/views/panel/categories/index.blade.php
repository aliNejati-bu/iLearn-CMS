@extends('layouts.panel')

@section('title', 'لیست دسته بندی ها')

@section('main')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div>
                    <div id="table-gridjs"></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let categories = {!! $categories->toJson() !!};

        let data = [];

        categories.forEach(category => {
            data.push([category.id, category.name, category.id]);
        });

        console.log(data);

        class GridDatatable {
            init() {
                this.GridjsTableInit();
            }
            GridjsTableInit() {
                document.getElementById("table-gridjs") &&
                    new gridjs.Grid({
                        columns: [{
                                name: "شناسه",
                                formatter: function(e) {
                                    return gridjs.html('<span class="fw-semibold">' + e + "</span>");
                                },
                            },
                            "نام",
                            {
                                name: "عملیات",
                                width: "120px",
                                formatter: function(e) {
                                    return gridjs.html("<a href='/management/categories/" + e +
                                        "/edit' class='btn btn-primary btn-sm w-100 mb-2'>ویرایش</a> <a href='/management/categories/" + e + "/delete' class='btn btn-danger btn-sm w-100'>حذف</a>"
                                        );
                                },
                            },
                        ],
                        pagination: {
                            limit: 10
                        },
                        sort: !0,
                        search: !0,
                        data: data,
                    }).render(document.getElementById("table-gridjs"));
            }
        }
        document.addEventListener("DOMContentLoaded", function(e) {
            new GridDatatable().init();
        });
    </script>
@endsection
