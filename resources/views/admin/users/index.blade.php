@extends('layouts.admin.index')
@section('title', 'Landing Page ')

@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">
  <!-- BEGIN: Subheader -->
  <div class="m-subheader ">
    <div class="d-flex align-items-center">
      <div class="mr-auto">
        <h3 class="m-subheader__title m-subheader__title--separator">
          Users
        </h3>
        <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
          <li class="m-nav__item m-nav__item--home">
            <a href="/mylabs" class="m-nav__link m-nav__link--icon">
              <i class="m-nav__link-icon flaticon-line-graph"></i>
            </a>
          </li>
          <li class="m-nav__separator">
            -
          </li>
          <li class="m-nav__item">
            <span class="m-nav__link-text">
              Users
            </span>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- END: Subheader -->
  <div class="m-content">
    <div class="m-portlet m-portlet--mobile">
      <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
          <div class="m-portlet__head-title">
            <h3 class="m-portlet__head-text">
              Users
              {{-- <small>
                data loaded from remote data source
              </small> --}}
            </h3>
          </div>
        </div>
      </div>
      <div class="m-portlet__body">
        <!--begin: Search Form -->
        <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
          <div class="row align-items-center">
            <div class="col-xl-8 order-2 order-xl-1">
              <div class="form-group m-form__group row align-items-center">
                <div class="col-md-4">
                  <div class="m-form__group m-form__group--inline">
                    <div class="m-form__label">
                      <label>
                        Status:
                      </label>
                    </div>
                    <div class="m-form__control">
                      <select class="form-control m-bootstrap-select" id="m_form_status">
                        <option value="">
                          All
                        </option>
                        <option value="1">
                          Pending
                        </option>
                        <option value="2">
                          Delivered
                        </option>
                        <option value="3">
                          Canceled
                        </option>
                      </select>
                    </div>
                  </div>
                  <div class="d-md-none m--margin-bottom-10"></div>
                </div>
                <div class="col-md-4">
                  <div class="m-form__group m-form__group--inline">
                    <div class="m-form__label">
                      <label class="m-label m-label--single">
                        Type:
                      </label>
                    </div>
                    <div class="m-form__control">
                      <select class="form-control m-bootstrap-select" id="m_form_type">
                        <option value="">
                          All
                        </option>
                        <option value="1">
                          Online
                        </option>
                        <option value="2">
                          Retail
                        </option>
                        <option value="3">
                          Direct
                        </option>
                      </select>
                    </div>
                  </div>
                  <div class="d-md-none m--margin-bottom-10"></div>
                </div>
                <div class="col-md-4">
                  <div class="m-input-icon m-input-icon--left">
                    <input type="text" class="form-control m-input" placeholder="Search..." id="generalSearch">
                    <span class="m-input-icon__icon m-input-icon__icon--left">
                      <span>
                        <i class="la la-search"></i>
                      </span>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 order-1 order-xl-2 m--align-right">
              <a href="users/create" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
                <span>
                  <i class="la la-plus-circle"></i>
                  <span>
                    Add User
                  </span>
                </span>
              </a>
              <div class="m-separator m-separator--dashed d-xl-none"></div>
            </div>
          </div>
        </div>
        <!--end: Search Form -->
        <!--begin: Datatable -->
        <div class="m_datatable" id="ajax_data"></div>
        <!--end: Datatable -->
      </div>
    </div>
  </div>
</div>

<script>
  var Datatable = {
    init: function() {
      var t;
      t = $(".m_datatable").mDatatable({
        data: {
          type: "remote",
          source: {
            read: {
              method: 'GET',
              url: '/mylabs/users/json',
              map: function(t) {
                var e = t;
                return void 0 !== t.data && (e = t.data), e
              }
            }
          },
          pageSize: 10,
          serverPaging: !0,
          serverFiltering: !0,
          serverSorting: !0
        },
        layout: {
          scroll: !1,
          footer: !1
        },
        sortable: !0,
        pagination: !0,
        toolbar: {
          items: {
            pagination: {
              pageSizeSelect: [10, 20, 30, 50, 100]
            }
          }
        },
        search: {
          input: $("#generalSearch")
        },
        columns: [{
          field: "id",
          title: "#",
          width: 50,
          sortable: !1,
          textAlign: "center",
          selector: {
            class: "m-checkbox--solid m-checkbox--brand"
          }
        }, {
          field: "username",
          title: "Username",
          filterable: !1,
          width: 100,
        }, {
          field: "name",
          title: "Full Name",
          attr: {
            nowrap: "nowrap"
          },
          width: 150,
        }, {
          field: "email",
          title: "E-mail"
        }, {
          field: "role_id",
          title: "Role",
          template: function(t) {
            var e = {
              1: {
                title: "Admin",
                class: "m-badge--brand"
              },
              2: {
                title: "User",
                class: "m-badge--success"
              },
            };
            return '<span class="m-badge ' + e[t.role_id].class + ' m-badge--wide">' + e[t.role_id].title + "</span>"
          }
        },
        {
          field: "username",
          width: 110,
          title: "Actions",
          sortable: !1,
          overflow: "visible",
          template: function(t, e, a) {
            return '\t\t\t\t\t\t<div class="dropdown ' + (a.getPageSize() - e <= 4 ? "dropup" : "") + '">\t\t\t\t\t\t\t<a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown">                                <i class="la la-ellipsis-h"></i>                            </a>\t\t\t\t\t\t  \t<div class="dropdown-menu dropdown-menu-right">\t\t\t\t\t\t    \t<a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>\t\t\t\t\t\t    \t<a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>\t\t\t\t\t\t    \t<a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>\t\t\t\t\t\t  \t</div>\t\t\t\t\t\t</div>\t\t\t\t\t\t<a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details">\t\t\t\t\t\t\t<i class="la la-edit"></i>\t\t\t\t\t\t</a>\t\t\t\t\t\t<a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete">\t\t\t\t\t\t\t<i class="la la-trash"></i>\t\t\t\t\t\t</a>\t\t\t\t\t'
          }
        }]
      }), $("#m_form_status").on("change", function() {
        t.search($(this).val(), "Status")
      }), $("#m_form_type").on("change", function() {
        t.search($(this).val(), "Type")
      }), $("#m_form_status, #m_form_type").selectpicker()
    }
  };
  $(document).ready(function() {
    Datatable.init()

    $("#select-role").select2({
      placeholder: "Select a value",
      data: [{
        id: 0,
        text: "Enhancement"
      }, {
        id: 1,
        text: "Bug"
      }, {
        id: 2,
        text: "Duplicate"
      }, {
        id: 3,
        text: "Invalid"
      }, {
        id: 4,
        text: "Wontfix"
      }]
    })

    $.ajax({
      url: '/api/roles',
      success: function(response) {
        console.log({response})
        $("#select-role").append("<option>Select Role</option>")
        $.each(response, function(index, value) {
          console.log({value})
          $("#select-role").append("<option value=''"+value.id+"''>"+value.title+"</option>");
        });
      }
    });

    $('#submit').on('click', function() {
      $.ajax({
        url: '/api/roles',
        success: function(response) {
          console.log({response})
        },
        error: function(jqXHR, exception) {
          var message = jqXHR.responseJSON.message;
          $.notify({message}, {
            type: 'warning',
            timer: 2000,
            delay: 2000,
            allow_dismiss: true,
          })
        },
      });
    })
  });
</script>
@endsection