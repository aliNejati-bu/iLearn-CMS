@extends('layouts.panel')

@section('title', 'لیست نظرات')

@section('main')
    <div class="container-fluid">
        <div class="card">
            </div>
            <div class="card-body">
                <div>
                    <div id="table-gridjs"></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let comments = {!! $comments->toJson() !!};

        console.log(comments);
        
        let data = [];

        comments.forEach(comment => {
            data.push([comment.id, comment.user.first_name + ' ' + comment.user.last_name, comment.article.id, comment.body, comment.id]);
        });

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
                            "کاربر",
                            {
                                name: "شماره مقاله",
                                formatter: function (e) {
                                    return gridjs.html('<a href="/articles/' + e + '" class="text-primary">' + e + '</a>');
                                }
                            },
                            "متن",
                            {
                                name: "عملیات",
                                width: "120px",
                                formatter: function(e) {
                                    return gridjs.html("<a href='/management/comments/" + e +
                                        "/verify' class='btn btn-success btn-sm w-100 mb-2'>تایید</a> <a href='/management/comments/" + e + "/reject' class='btn btn-danger btn-sm w-100'>رد</a>"
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
