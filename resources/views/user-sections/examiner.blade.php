@extends("user-frontend.index")
@section("content")
<style type="text/css">
    .cust-table td{
        background-color: #fff;
    }
</style>
    <div class="row">
            
                <div class="col-md-6">
                    
                    <div class="alert" id="message" style="display: none"></div>
                    <form method="post" id="upload_form" class="bg-white" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                         <table class="table bg-white cust-table">
                          <tr>
                           <td width="50%" align="right"><label>Select File for Upload</label></td>
                           <td width="30"><input type="file" name="select_file" id="select_file" /></td>
                           <td width="30%" align="left"><input type="submit" name="upload" id="upload" class="btn btn-primary" value="Upload"></td>
                          </tr>
                          <tr>
                           <td width="40%" align="right"></td>
                           <td width="30"><span class="text-muted">pdf</span></td>
                           <td width="30%" align="left"></td>
                          </tr>
                         </table>
                        </div>
                    </form>
                </div>

    </div>

<!--image upload script in parent function-->
@endsection
