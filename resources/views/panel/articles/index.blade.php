@extends('layouts.panel')

@section('title', 'لیست پست ها')

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
        let articles = {!! (new App\Http\Resources\ArticleCollection($articles))->toJson() !!};
        
        let data = [];

        articles.forEach(article => {
            data.push([article.id, article.title, article.user.name, article.tags, article.id]);
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
                            "عنوان",
                            "نویسنده",
                            {
                                name: "برچسب ها",
                                formatter: function(e) {
                                    let tags = e.split(',');

                                    let html = '';
                                    tags.forEach(tag => {
                                        html += '<button type="button" class="btn btn-light btn-sm m-1">' + tag + '</button>';
                                    });

                                    return gridjs.html(html);
                                },
                            },
                            {
                                name: "عملیات",
                                width: "120px",
                                formatter: function(e) {
                                    return gridjs.html("<a href='/management/articles/" + e +
                                        "/edit' class='text-primary text-decoration-underline'>ویرایش</a> <a href='/management/articles/" + e + "/delete' class='text-danger text-decoration-underline'>حذف</a>"
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
