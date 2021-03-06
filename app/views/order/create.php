<div class="container-fluid">
    <div class="col-sm-12 col-md-12 col-xs-12">
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h4 class="one">Text</h4>
                </div>
                <div class="col-auto">
                    <button class="btn btn-primary btn-sm pull-left">Button</button>
                </div>
            </div>
        </div>
        <hr>
        <div class="loading"></div>
        <form id="form-submit-order">
            <div class="row">
                <div class="col-xs-12 col-md-6 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon">@</span>
                                <input type="text" name="tracking_number" id="tracking_number" class="form-control" placeholder="tracking_number" aria-label="" readonly>
                            </div>
                            <div class="input-group mb-3">
                                <select class="select2-customer-id" name="customer_id" style="width: 100%">
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon">@</span>
                                <input type="text" name="sender_name" class="form-control" placeholder="Sender Name" aria-label="">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon">@</span>
                                <input type="text" name="sender_phone" class="form-control" placeholder="Sender Phone" aria-label="">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon">@</span>
                                <textarea class="form-control" name="sender_address" aria-label="With textarea" placeholder="Sender Address"></textarea>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon">@</span>
                                <input type="text" name="delivery_name" class="form-control" placeholder="Delivery Name" aria-label="">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon">@</span>
                                <input type="text" name="delivery_phone" class="form-control" placeholder="Delivery Phone" aria-label="">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon">@</span>
                                <textarea class="form-control" name="delivery_address" aria-label="With textarea" placeholder="Delivery Address"></textarea>
                            </div>

                            <div class="input-group mb-3">
                                <select class="select2-status-order" name="status" style="width: 100%">
                                    <option value="new">New</option>
                                    <option value="shipping">Shipping</option>
                                    <option value="complete">Complete</option>
                                    <option value="complaint">Complaint</option>
                                    <option value="cancel">Cancel</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="input-group mb-3">
                                <select class="select2-category-id" name="category_id" style="width: 100%">
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">$</span>
                                <input type="text" name="shipping_cost" class="form-control" aria-label="shipping_cost)">
                                <span class="input-group-text">.00</span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">$</span>
                                <input type="text" name="item_price" class="form-control" aria-label="item_price">
                                <span class="input-group-text">.00</span>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon">@</span>
                                <input type="text" name="is_insurance" class="form-control" placeholder="Is insurance" aria-label="">
                            </div>
                            <div class="input-group mb-3">
                                <select class="select2-user-id" name="user_id" style="width: 100%">
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon">@</span>
                                <input type="text" name="user_fee" class="form-control" placeholder="User Fee" aria-label="">
                            </div>
                            <div class="mb-3">
                                <input class="form-control" type="file" name="shipping_photo" id="formFile">
                            </div>
                            <div class="mb-3">
                                <input class="form-control" type="file" name="delivered_photo" id="formFile">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon">@</span>
                                <textarea class="form-control" name="note" aria-label="With textarea" placeholder="Note"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="page-header">
                <span style="display: inline;">
                    <input type="submit" class="btn btn-primary btn-sm" value="Post" />
                    <input type="submit" class="btn btn-info btn-sm" value="Cancel" />
                </span>

            </div>
        </form>

    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {

        document.getElementById('tracking_number').value = (Math.floor(Date.now() * 100));
        $(".select2-category-id").select2({
            theme: "bootstrap",
            width: 'resolve',
            minimumInputLength: 3,
            // tags: [],
            ajax: {
                url: globalUrl.baseUrl + 'categories/select2-data',
                dataType: 'JSON',
                type: "POST",
                quietMillis: 50,
                processResults: function(data, page) {
                    return {
                        results: data
                    };
                }
            }
        });

        $(".select2-user-id").select2({
            theme: "bootstrap",
            width: 'resolve',
            minimumInputLength: 1,
            // tags: [],
            ajax: {
                url: globalUrl.baseUrl + 'user/select2-data',
                dataType: 'JSON',
                type: "POST",
                quietMillis: 50,
                processResults: function(data, page) {
                    return {
                        results: data
                    };
                }
            }
        });

        $(".select2-customer-id").select2({
            theme: "bootstrap",
            width: 'resolve',
            minimumInputLength: 1,
            // tags: [],
            ajax: {
                url: globalUrl.baseUrl + 'customer/select2-data',
                dataType: 'JSON',
                type: "POST",
                quietMillis: 50,
                processResults: function(data, page) {
                    return {
                        results: data
                    };
                }
            }
        });

        $('.select2-status-order').select2({
            theme: "bootstrap",
            width: 'resolve',
        });

        $('#form-submit-order').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: globalUrl.baseUrl + 'order/store',
                type: 'POST',
                dataType: 'JSON',
                crossDomain: true,
                // dataType: 'jsonp',
                // beforeSend: function() {
                //     $('.loading').html('<div class="ajax_loading"><br />Wait. . . .</div>');
                // },
                data: $('#form-submit-order').serialize(),
                success: function(data) {
                    console.log(data);
                },
                error: function() {
                    alert("Terjadi kesalahan!");
                },
            })
        });

    });
</script>