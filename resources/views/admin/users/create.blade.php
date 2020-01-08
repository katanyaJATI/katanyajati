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
            <a href="/mylabs/users" class="m-nav__link">
              <span class="m-nav__link-text">
                Users
              </span>
            </a>
          </li>
          <li class="m-nav__separator">
            -
          </li>
          <li class="m-nav__item">
            <span class="m-nav__link-text">
              Create
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
            <span class="m-portlet__head-icon m--hide">
              <i class="la la-gear"></i>
            </span>
            <h3 class="m-portlet__head-text">
              Add New User
            </h3>
          </div>
        </div>
      </div>
      <!--begin::Form-->
      <form id="form" class="m-form m-form--fit m-form--label-align-right">
        <div class="m-portlet__body">
          <div class="form-group m-form__group">
            <label class="form-control-label" for="inputUsername">Username</label>
            <input type="text" class="form-control err-helper m-input" id="username" name="username" placeholder="Enter Username">
          </div>
          <div class="form-group m-form__group">
            <label class="form-control-label" for="inputEmail">Name</label>
            <input type="text" class="form-control err-helper m-input" id="name" name="name" placeholder="Enter Name" required>
          </div>
          <div class="form-group m-form__group">
            <label class="form-control-label" for="inputEmail">Email address</label>
            <input type="email" class="form-control err-helper m-input" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group m-form__group">
            <label class="form-control-label" for="inputPassword">Password</label>
            <input type="password" class="form-control err-helper m-input" id="password" name="password" placeholder="Password">
          </div>
          <div class="form-group m-form__group">
            <label class="form-control-label" for="selectRole">Role</label>
            <select class="form-control err-helper m-select2" id="role" name="role"></select>
          </div>
        </div>
        <div class="m-portlet__foot m-portlet__foot--fit">
          <div class="m-form__actions">
            <button class="btn btn-primary" id="btn-save">
              Save
            </button>
            <button type="reset" class="btn btn-secondary">
              Reset
            </button>
          </div>
        </div>
      </form>
      <!--end::Form-->
    </div>
  </div>
</div>

<script>
  $(document).ready(function() {
    $('#role').select2({
      container: 'body'
    })

    $.ajax({
      url: '/api/roles',
      success: function(response) {
        console.log({response})
        $("#role").append("<option value=''>Select Role</option>")
        $.each(response, function(index, value) {
          console.log({value})
          $("#role").append("<option value='"+value.id+"'>"+value.title+"</option>");
        });
      }
    });

    $('#form').validate({ // initialize the plugin
      rules: {
        username: {
          required: true,
          minlength: 6
        },
        email: {
          required: true,
          email: true
        },
        password: {
          required: true,
          minlength: 6
        }
      },
      submitHandler: function (form) {
        saveData()
        return false;
      }
    });

    function saveData() {
      let username = $('#username').val()
      let name = $('#name').val()
      let email = $('#email').val()
      let password = $('#password').val()
      let role = $('select[name=role]').val()
      let data = {
        username,
        name,
        email,
        password,
        role,
      }
      console.log({data})
      $.ajax({
        url: '/api/users/store',
        type: 'POST',
        data,
        success: function(response) {
          $.notify({message: 'User Created'}, {
            type: 'success',
            timer: 2000,
            delay: 2000,
            allow_dismiss: true,
          })
          $('#form').trigger('reset')
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
    }

    // $('#form').on('submit', function(e) {

    // })
  });
</script>
@endsection