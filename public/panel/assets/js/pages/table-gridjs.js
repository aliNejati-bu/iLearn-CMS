class GridDatatable {
  init() {
    this.GridjsTableInit();
  }
  GridjsTableInit() {
    document.getElementById("table-gridjs") &&
      new gridjs.Grid({
        columns: [
          {
            name: "شناسه",
            formatter: function (e) {
              return gridjs.html('<span class="fw-semibold">' + e + "</span>");
            },
          },
          "نام",
          {
            name: "ایمیل",
            formatter: function (e) {
              return gridjs.html('<a href="">' + e + "</a>");
            },
          },
          "سمت کاری",
          "شرکت",
          "کشور",
          {
            name: "عملیات",
            width: "120px",
            formatter: function (e) {
              return gridjs.html(
                "<a href='#' class='text-reset text-decoration-underline'>جزئیات</a>"
              );
            },
          },
        ],
        pagination: { limit: 5 },
        sort: !0,
        search: !0,
        data: [
          [
            "11",
            "آلیس",
            "alice@example.com",
            "مهندس نرم افزار",
            "شرکت ABC",
            "ایالات متحده",
          ],
          ["12", "باب", "bob@example.com", "مدیر محصول", "XYZ Inc", "کانادا"],
          [
            "13",
            "چارلی",
            "charlie@example.com",
            "تحلیلگر داده",
            "123 Corp",
            "استرالیا",
          ],
          [
            "14",
            "دیوید",
            "david@example.com",
            "طراح UI/UX",
            "456 Ltd",
            "بریتانیا",
          ],
          [
            "15",
            "حوا",
            "eve@example.com",
            "کارشناس بازاریابی",
            "789 شرکت",
            "فرانسه",
          ],
          [
            "16",
            "فرانک",
            "frank@example.com",
            "مدیر منابع انسانی",
            "شرکت ABC",
            "آلمان",
          ],
          [
            "17",
            "گریس",
            "grace@example.com",
            "تحلیلگر مالی",
            "XYZ Inc",
            "ژاپن",
          ],
          [
            "18",
            "هانا",
            "hannah@example.com",
            "نماینده فروش",
            "123 Corp",
            "برزیل",
          ],
          [
            "19",
            "یان",
            "ian@example.com",
            "توسعه دهنده نرم افزار",
            "456 Ltd",
            "هند",
          ],
          ["20", "جین", "jane@example.com", "مدیر عملیات", "789 شرکت", "چین"],
        ],
      }).render(document.getElementById("table-gridjs")),
      document.getElementById("table-pagination") &&
        new gridjs.Grid({
          columns: [
            {
              name: "ID",
              width: "120px",
              formatter: function (e) {
                return gridjs.html(
                  '<a href="" class="fw-medium">' + e + "</a>"
                );
              },
            },
            "نام",
            "تاریخ",
            "جمع کل",
            {
              name: "عملیات",
              width: "100px",
              formatter: function (e) {
                return gridjs.html(
                  "<button type='button' class='btn btn-sm btn-light'>جزئیات</button>"
                );
              },
            },
          ],
          pagination: { limit: 5 },
          data: [
            ["#RB2320", "مهدی", "1 مهر 1404", "$24.05"],
            ["#RB8652", "رضا", "2 مهر 1404", "$26.15"],
            ["#RB8520", "علی", "3 مهر 1404", "$21.25"],
            ["#RB9512", "فاطمه", "4 مهر 1404", "$25.03"],
            ["#RB7532", "اکبر", "5 مهر 1404", "$22.61"],
            ["#RB9632", "محسن", "6 مهر 1404", "$24.05"],
            ["#RB7456", "نوید", "7 مهر 1404", "$26.15"],
            ["#RB3002", "سارا", "8 مهر 1404", "$21.25"],
            ["#RB9857", "احسان", "9 مهر 1404", "$22.61"],
            ["#RB2589", "ستایش", "10 مهر 1404", "$25.03"],
          ],
        }).render(document.getElementById("table-pagination")),
      document.getElementById("table-search") &&
        new gridjs.Grid({
          columns: ["نام", "ایمیل", "سمت کاری", "شرکت", "کشور"],
          pagination: { limit: 5 },
          search: !0,
          data: [
            [
              "آلیس",
              "alice@example.com",
              "مهندس نرم افزار",
              "شرکت ABC",
              "ایالات متحده",
            ],
            ["Bob", "bob@example.com", "Product Manager", "XYZ Inc", "Canada"],
            [
              "چارلی",
              "charlie@example.com",
              "تحلیلگر داده",
              "123 Corp",
              "استرالیا",
            ],
            ["دیوید", "david@example.com", "طراح UI/UX", "456 Ltd", "بریتانیا"],
            [
              "حوا",
              "eve@example.com",
              "کارشناس بازاریابی",
              "789 شرکت",
              "فرانسه",
            ],
            [
              "فرانک",
              "frank@example.com",
              "مدیر منابع انسانی",
              "شرکت ABC",
              "آلمان",
            ],
            ["گریس", "grace@example.com", "تحلیلگر مالی", "XYZ Inc", "ژاپن"],
            ["هانا", "hannah@example.com", "نماینده فروش", "123 Corp", "برزیل"],
            [
              "یان",
              "ian@example.com",
              "توسعه دهنده نرم افزار",
              "456 Ltd",
              "هند",
            ],
            ["جین", "jane@example.com", "مدیر عملیات", "789 شرکت", "چین"],
          ],
        }).render(document.getElementById("table-search")),
      document.getElementById("table-sorting") &&
        new gridjs.Grid({
          columns: ["نام", "ایمیل", "سمت کاری", "شرکت", "کشور"],
          pagination: { limit: 5 },
          sort: !0,
          data: [
            [
              "آلیس",
              "alice@example.com",
              "مهندس نرم افزار",
              "شرکت ABC",
              "ایالات متحده",
            ],
            ["Bob", "bob@example.com", "Product Manager", "XYZ Inc", "Canada"],
            [
              "چارلی",
              "charlie@example.com",
              "تحلیلگر داده",
              "123 Corp",
              "استرالیا",
            ],
            ["دیوید", "david@example.com", "طراح UI/UX", "456 Ltd", "بریتانیا"],
            [
              "حوا",
              "eve@example.com",
              "کارشناس بازاریابی",
              "789 شرکت",
              "فرانسه",
            ],
            [
              "فرانک",
              "frank@example.com",
              "مدیر منابع انسانی",
              "شرکت ABC",
              "آلمان",
            ],
            ["گریس", "grace@example.com", "تحلیلگر مالی", "XYZ Inc", "ژاپن"],
            ["هانا", "hannah@example.com", "نماینده فروش", "123 Corp", "برزیل"],
            [
              "یان",
              "ian@example.com",
              "توسعه دهنده نرم افزار",
              "456 Ltd",
              "هند",
            ],
            ["جین", "jane@example.com", "مدیر عملیات", "789 شرکت", "چین"],
          ],
        }).render(document.getElementById("table-sorting")),
      document.getElementById("table-loading-state") &&
        new gridjs.Grid({
          columns: ["نام", "ایمیل", "سمت کاری", "شرکت", "کشور"],
          pagination: { limit: 5 },
          sort: !0,
          data: function () {
            return new Promise(function (e) {
              setTimeout(function () {
                e([
                  [
                    "آلیس",
                    "alice@example.com",
                    "مهندس نرم افزار",
                    "شرکت ABC",
                    "ایالات متحده",
                  ],
                  ["باب", "bob@example.com", "مدیر محصول", "XYZ Inc", "کانادا"],
                  [
                    "چارلی",
                    "charlie@example.com",
                    "تحلیلگر داده",
                    "123 Corp",
                    "استرالیا",
                  ],
                  [
                    "دیوید",
                    "david@example.com",
                    "طراح UI/UX",
                    "456 Ltd",
                    "بریتانیا",
                  ],
                  [
                    "حوا",
                    "eve@example.com",
                    "کارشناس بازاریابی",
                    "789 شرکت",
                    "فرانسه",
                  ],
                  [
                    "فرانک",
                    "frank@example.com",
                    "مدیر منابع انسانی",
                    "شرکت ABC",
                    "آلمان",
                  ],
                  [
                    "گریس",
                    "grace@example.com",
                    "تحلیلگر مالی",
                    "XYZ Inc",
                    "ژاپن",
                  ],
                  [
                    "هانا",
                    "hannah@example.com",
                    "نماینده فروش",
                    "123 Corp",
                    "برزیل",
                  ],
                  [
                    "یان",
                    "ian@example.com",
                    "توسعه دهنده نرم افزار",
                    "456 Ltd",
                    "هند",
                  ],
                  ["جین", "jane@example.com", "مدیر عملیات", "789 شرکت", "چین"],
                ]);
              }, 5000);
            });
          },
        }).render(document.getElementById("table-loading-state")),
      document.getElementById("table-fixed-header") &&
        new gridjs.Grid({
          columns: ["نام", "ایمیل", "سمت کاری", "شرکت", "کشور"],
          sort: !0,
          pagination: !0,
          fixedHeader: !0,
          height: "400px",
          data: [
            [
              "آلیس",
              "alice@example.com",
              "مهندس نرم افزار",
              "شرکت ABC",
              "ایالات متحده",
            ],
            ["Bob", "bob@example.com", "Product Manager", "XYZ Inc", "Canada"],
            [
              "چارلی",
              "charlie@example.com",
              "تحلیلگر داده",
              "123 Corp",
              "استرالیا",
            ],
            ["دیوید", "david@example.com", "طراح UI/UX", "456 Ltd", "بریتانیا"],
            [
              "حوا",
              "eve@example.com",
              "کارشناس بازاریابی",
              "789 شرکت",
              "فرانسه",
            ],
            [
              "فرانک",
              "frank@example.com",
              "مدیر منابع انسانی",
              "شرکت ABC",
              "آلمان",
            ],
            ["گریس", "grace@example.com", "تحلیلگر مالی", "XYZ Inc", "ژاپن"],
            ["هانا", "hannah@example.com", "نماینده فروش", "123 Corp", "برزیل"],
            [
              "یان",
              "ian@example.com",
              "توسعه دهنده نرم افزار",
              "456 Ltd",
              "هند",
            ],
            ["جین", "jane@example.com", "مدیر عملیات", "789 شرکت", "چین"],
          ],
        }).render(document.getElementById("table-fixed-header")),
      document.getElementById("table-hidden-column") &&
        new gridjs.Grid({
          columns: [
            "نام",
            "ایمیل",
            "سمت کاری",
            "شرکت",
            { name: "کشور", hidden: !0 },
          ],
          pagination: { limit: 5 },
          sort: !0,
          data: [
            [
              "آلیس",
              "alice@example.com",
              "مهندس نرم افزار",
              "شرکت ABC",
              "ایالات متحده",
            ],
            ["Bob", "bob@example.com", "Product Manager", "XYZ Inc", "Canada"],
            [
              "چارلی",
              "charlie@example.com",
              "تحلیلگر داده",
              "123 Corp",
              "استرالیا",
            ],
            ["دیوید", "david@example.com", "طراح UI/UX", "456 Ltd", "بریتانیا"],
            [
              "حوا",
              "eve@example.com",
              "کارشناس بازاریابی",
              "789 شرکت",
              "فرانسه",
            ],
            [
              "فرانک",
              "frank@example.com",
              "مدیر منابع انسانی",
              "شرکت ABC",
              "آلمان",
            ],
            ["گریس", "grace@example.com", "تحلیلگر مالی", "XYZ Inc", "ژاپن"],
            ["هانا", "hannah@example.com", "نماینده فروش", "123 Corp", "برزیل"],
            [
              "یان",
              "ian@example.com",
              "توسعه دهنده نرم افزار",
              "456 Ltd",
              "هند",
            ],
            ["جین", "jane@example.com", "مدیر عملیات", "789 شرکت", "چین"],
          ],
        }).render(document.getElementById("table-hidden-column"));
  }
}
document.addEventListener("DOMContentLoaded", function (e) {
  new GridDatatable().init();
});
