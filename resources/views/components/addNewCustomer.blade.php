<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-md-10">
            <div class="card">

                <div id="result"></div>

                <form class="form-horizontal" method="post" action="#" id="buyerStore">

                    @csrf
                    <div class="card-body">
                        <div class="customer" style="display:block">

                            <div class="form-group row">

                                <div class="col-sm-12">
                                    <label for="name" class="text-end control-label col-form-label">Name
                                    </label>
                                    <input type="text" class="form-control require" id="Name" name="Name"
                                        placeholder="" />
                                </div>
                                <span class="req" style="color:red"></span>
                            </div>

                            <div class="form-group row">

                                <div class="col-sm-12">
                                    <label for="Email" class="text-end control-label col-form-label">Email</label>
                                    <input type="email" class="form-control require" id="email" name="Email"
                                        placeholder="" />
                                </div>
                                <span class="req" style="color:red"> </span>
                            </div>

                            <div class="form-group row">

                                <div class="col-sm-12">
                                    <label for="Phone" class="text-end control-label col-form-label">Phone</label>
                                    <input type="number" class="form-control require" id="Product_price" name="Phone"
                                        placeholder="" />
                                </div>
                                <span class="req" style="color:red"> </span>
                            </div>


                            <div class="form-group row">

                                <div class="col-sm-12">
                                    <label for="address" class="text-end control-label col-form-label">Address
                                        1</label>
                                    <input type="text " class="form-control require" id="Adress1" name="Address1"
                                        placeholder="" />
                                </div>
                                <span class="req" style="color:red"> </span>
                            </div>

                            <div class="form-group row">

                                <div class="col-sm-12">
                                    <label for="address" class="text-end control-label col-form-label">Address
                                        2</label>
                                    <input type="text " class="form-control require" id="Adress2" name="Address2"
                                        placeholder="" />
                                </div>
                                <span class="req" style="color:red"> </span>
                            </div>

                            <div class="form-group row">

                                <div class="col-sm-12">
                                    <label for="address" class="text-end control-label col-form-label">State </label>
                                    <input type="text " class="form-control require" id="State" name="State"
                                        placeholder="" />
                                </div>
                                <span class="req" style="color:red"> </span>
                            </div>
                            <div class="form-group row">

                                <div class="col-sm-12">
                                    <label for="address" class="text-end control-label col-form-label">City</label>
                                    <input type="text " class="form-control require" id="City" name="City"
                                        placeholder="" />
                                </div>
                                <span class="req" style="color:red"> </span>
                            </div>

                            <div class="form-group row">

                                <div class="col-sm-12">
                                    <label for="lname" class="text-end control-label col-form-label">Country </label>

                                    <select name="Country" id="productCategory" class="require">
                                        <option value=""> Select Country</option>
                                        <option value="Nepal"> Nepal </option>
                                        <option value="India">India</option>
                                        <option value="China">China</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bangladesh">Bnagladesh</option>
                                        <option value="Shree Lanka"> Shree Lanka</option>
                                        <option value="Other Countries"> Other Countries </option>
                                    </select>
                                </div>
                                <span class="req" style="color:red"> </span>
                            </div>
                            <div class="border-top">

                                <div class="card-body"style="float:right">
                                    <button type="button" class="btn btn-primary btn-lg btn-outline-success"
                                    name="addCustomer" id="addCustomer">
                                    Add
                                </button>
                            </div>
                        </div>
                            <!-- Customer end -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    var productrefresh = function() {
        ajax("/customerDetails", data, "pageload", "get");
    }

    $("#addCustomer").on("click", function() {

        var check = 0;

        $(".require").each(function(index, value) {
            console.log($(this).val());

            if ($(this).val() == "") {
                $(this).css("border", "1px solid red");

                // console.log(index, value);
                // $('.req').html(" *This filed is required !");

                check = 1;

            } else {
                $(this).css("border", "1px solid gray");
                // $(".req").html("");
            }
        });
        // check =0
        var v = $("#email").val();

        if (!validateEmail(v)) {
            check = 1;
            $("#email").css("border", "1px solid red");

        } else {
            $("#email").css("border", "1px solid gray");

        }


        if (check == 0) {
            var data = $("#buyerStore").serialize();
            // data.forEach((field) => {
            //     if (field.value = '') {
            //         $("." + field.name + "_error").text("error")
            //     }


            console.log(data);



            $("#productModelClose").click();
            alert("New Customer Added Sucessfully !");

            ajax("/customerStore", data, "result", "post", productrefresh);

        }

    });
</script>
