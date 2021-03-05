<!-- <main class="wrapper">
    <section class="hero">
        <h1 class="title-product"><?= $data['img']['title']; ?></h1>
        <article>
            <p><?= $data['img']['description']; ?></p>
            <a href="<?= $data['img']['browser']; ?>" class="link-product">Browse Breweries</a>
        </article>
    </section>
    <section class="breweries" id="breweries">
        <ul>
            <?php for ($i = 0; $i < count($data['img']['src']); $i++) { ?>
                <li>
                    <figure>
                        <img src=<?= $data['img']['src'][$i] ?> alt="">
                        <?php for ($j = 0; $j < count($data['img']['alt']); $j++) { ?>
                            <figcaption>
                                <h3><?= $data['img']['alt'][$i]; ?></h3>
                            </figcaption>
                        <?php } ?>
                    </figure>
                    <p>
                        Made in the interiors of collapsing stars star stuff harvesting star light venture billions upon billions Drake Equation brain is the seed of intelligence?
                    </p>
                    <a href="#" class="link-product">Visit Website</a>
                </li>
            <?php } ?>
        </ul>
    </section>
</main> -->
<div class="container-fluid">
    <div class="card-header">
        <h6>Logistik</h6>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="col-sm-12">

                <section>
                    <table id="tabel-data" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Last Name</th>
                                <th>Last Name</th>
                                <th>Last Name</th>
                                <th>Last Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        index_data();

        function index_data() {

            $.ajax({
                'url': globalUrl.baseUrl + 'order',
                'method': 'GET',
                'contentType': 'application/json'
            }).done(function(data) {
                var result = data.data;
                $('#tabel-data').DataTable({
                    processing: true,
                    "aaData": result,
                    "columns": [{
                            "data": "id",
                            orderable: false,
                            searchable: false
                        },
                        {
                            "data": "id",
                            orderable: false,
                            searchable: true
                        },
                        {
                            "data": "id",
                            orderable: false,
                            searchable: true,
                            "render": function(data, type, row) {
                                return '<span id="' + row.id + '">' + row.item_price + '</span>';
                                // if (type === 'display') {
                                //     return '<span id="' + data.ID + '">' + data.FullName + '</span>';
                                // } else if (type === 'sort') {
                                //     return data.LastName;
                                // } else {
                                //     return data;
                                // }
                            }
                        },
                        {
                            "data": "created_at",
                            render: function(d) {
                                return moment(d).format("dddd, DD-MM-YYYY");
                            },
                            width: '9%'
                        },
                        {
                            "data": "id",
                            "render": function(data, type, row) {
                                return '<span id="' + row.id + '">' + row.item_price + '</span>';
                                // if (type === 'display') {
                                //     return '<span id="' + data.ID + '">' + data.FullName + '</span>';
                                // } else if (type === 'sort') {
                                //     return data.LastName;
                                // } else {
                                //     return data;
                                // }
                            }
                        }
                    ],
                    "pageLength": 10
                });

            });
        }
    });
</script>