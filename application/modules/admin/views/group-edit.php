

<div id="main-content">
    <div class="container-fluid">

        <div class="col-xl-12 col-lg-7 col-md-12 mt-2">
            <table width="100%" height="105" class="adminform">
                <tbody>
                    <tr>
                        <td>
                            <table width="232" border="0" cellpadding="0" cellspacing="0" align="right">
                                <tbody>
                                    <tr valign="middle" align="center" height="35">
                                        <td width="33%" align="center">
                                            <input type="reset" name="reset" id="reset" value="Add New" style="width:80px;">
                                        </td>
                                        <td width="33%" align="center">

                                            <input type="button" name="save2" id="save2" value="Save" style="width:80px;">

                                        </td>
                                        <td width="33%" align="center">
                                            <input type="button" name="edit" id="edit" value="Close">
                                        </td>

                                    </tr>
                                    <tr valign="middle" align="center"> </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td width="55%" height="185" valign="top">
                            <br><br>


                            <div class="col-xl-12 col-lg-7 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 class="card-title">Menu Master</h6>
                                    </div>
                                    <div class="card-body">
                                        <form method="post" name="myform1" action="companymat_save">
                                            <table width="80%" align="center" class="adminform_new">
                                                <tbody>

                                                    <tr>


                                                        <td height="2" colspan="5" valign="top">
                                                            <div id="generaldetails" style="display:block;">
                                                                <table width="100%" border="0" cellspacing="1" cellpadding="4">
                                                                    <tr>
                                                                        <td width="46%" valign="top"><span class="style6">*</span>
                                                                            <b> <label id='lblcompanyname'>Menu Name</label></b>
                                                                        <td width="54%" valign="top">
                                                                            <input type="text" value="" name="menu_name" id="menu_name" />

                                                                        </td>
                                                                    </tr>


                                                                    <tr>
                                                                        <td width="46%" valign="top"><span class="style6">*</span>
                                                                            <b> <label id='lblcompanyname'>Route Name</label></b>
                                                                        <td width="54%" valign="top">
                                                                            <input type="text" value="" name="route" id="route" />

                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td width="46%" valign="top"><span class="style6">*</span>
                                                                            <b> <label id='lblcompanyname'> Status </label></b>
                                                                        <td width="54%" valign="top">
                                                                            <select class="">
                                                                                <option value="0">----Select----Status----</option>
                                                                                <option value="1">Active</option>
                                                                                <option value="2">Inactive</option>

                                                                            </select>

                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </form>
                                    </div>
                                </div>
                            </div>




                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="row clearfix">


            <div class="col-md-12">
                <div class="card p-4 mb-4">
                    <h6 class="card-title mb-4">Menu Master</h6>

                    <table id="myTable" class="table display dataTable table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sr no</th>
                                <th>Menu Name</th>
                                <th>Route Name</th>
                                <th>Status</th>
                                <th>Action </th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="sorting_1">1</td>
                                <td>Settings</td>
                                <td>settings</td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td><a href="#" onclick="javascript:if(confirm('Do You Want to Edit Menu ?')){return true;}else{return false}"><i class="fa fa-edit"></i></a></td>

                            </tr>


                        </tbody>
                    </table>
                </div> <!-- .card end -->

            </div>
        </div>
    </div>

</div>
</div>

<!-- Mirrored from wrraptheme.com/templates/lucid/hr/bs5/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Nov 2023 09:03:58 GMT -->