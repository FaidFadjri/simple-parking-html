<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- Material Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="./css/parkir_depan/style.css">


</head>

<body>
    <section>
        <div class="header">
            <h4>Area Parkir Depan</h4>
        </div>
        <main class="denah">
            <!--------- Legend  ---------->
            <div class="legend-wrap">
                <div class="legend-wrap-desc">
                    <div class="desc-wrap">
                        <div class="legend legend-shadow"></div>
                        Parkir Bayangan
                    </div>
                    <div class="desc-wrap">
                        <div class="legend legend-active"></div>
                        Parkir Terisi
                    </div>
                    <div class="desc-wrap">
                        <div class="legend legend-empty"></div>
                        Parkir Kosong
                    </div>
                </div>
            </div>

            <div class="kantor shadow">
                Gedung Akastra
            </div>

            <!-------- GRUP A ------->
            <div class="seat-row">
                <?php for ($i = 1; $i <= 8; $i++) : ?>
                    <a class="seat seat-vertical" grup="A" position="<?= $i; ?>"></a>
                <?php endfor; ?>
            </div>

            <!---------------- Jalan Utama ------------------->
            <!--------- GRUP B -------->
            <div class="seat-row">
                <?php for ($i = 1; $i <= 5; $i++) : ?>
                    <a class="seat-shadow seat-horizontal" grup="B" position="<?= $i; ?>"></a>
                <?php endfor; ?>
            </div>
            <div class="seat-row">
                <?php for ($i = 6; $i <= 10; $i++) : ?>
                    <a class="seat-shadow seat-horizontal" grup="B" position="<?= $i; ?>"></a>
                <?php endfor; ?>
            </div>


            <br>
            <!---------------- Area Pos Satpam    -------------->
            <!------------ GRUP C ----------------------------->
            <div class="seat-row">
                <?php for ($i = 1; $i <= 5; $i++) : ?>
                    <?php if ($i == 1) : ?>
                        <a class="seat-shadow seat-vertical" grup="C" position="<?= $i; ?>"></a>
                    <?php else : ?>
                        <a class="seat seat-vertical" grup="C" position="<?= $i; ?>"></a>
                    <?php endif; ?>
                <?php endfor; ?>

                <div class="pos seat-vertical">
                    POS
                </div>
            </div>

            <div class="seat-row">
                <?php for ($i = 6; $i <= 9; $i++) : ?>
                    <?php if ($i == 6) : ?>
                        <a class="seat-shadow seat-vertical" grup="C" position="<?= $i; ?>"></a>
                    <?php else : ?>
                        <a class="seat seat-vertical" grup="C" position="<?= $i; ?>"></a>
                    <?php endif; ?>
                <?php endfor; ?>
                <div class="seat-vertical opacity-0"></div>
                <div class="seat-vertical opacity-0"></div>
            </div>



            <!----------------- GRUP D ---------------------->
            <div class="seat-row">
                <div class="seat-shadow seat-horizontal" grup="D" position="1"></div>
            </div>
            <div class="seat-row">
                <?php for ($i = 2; $i <= 5; $i++) : ?>
                    <a class="seat-shadow seat-horizontal" grup="D" position="<?= $i; ?>"></a>
                <?php endfor; ?>
            </div>


            <!--------------- GRUP E ------------------------>
            <div class="seat-row">
                <?php for ($i = 1; $i <= 7; $i++) : ?>
                    <?php if ($i == 1 || $i == 2) : ?>
                        <a class="seat-shadow seat-vertical" grup="E" position="<?= $i; ?>"></a>
                    <?php else : ?>
                        <a class="seat seat-vertical" grup="E" position="<?= $i; ?>"></a>
                    <?php endif; ?>
                <?php endfor; ?>
            </div>

            <!------------- GRUP F -------------------------->
            <div class="seat-row">
                <?php for ($i = 1; $i <= 4; $i++) : ?>
                    <a class="seat-shadow seat-horizontal" grup="F" position="<?= $i; ?>"></a>
                <?php endfor; ?>
            </div>
            <div class="seat-row">
                <?php for ($i = 5; $i <= 11; $i++) : ?>
                    <a class="seat seat-vertical" grup="F" position="<?= $i; ?>"></a>
                <?php endfor; ?>
                <div class="seat seat-vertical opacity-0"></div>
            </div>

            <!----------- Bottom Nav ---------->
            <nav class="bottom-nav">
                <a class="success-button">
                    <span class="material-icons">
                        chevron_left
                    </span>
                    Prev
                </a>
                <a href="/parkir/stall_bp.html" class="success-button">
                    Next
                    <span class="material-icons">
                        navigate_next
                    </span>
                </a>
            </nav>
        </main>
    </section>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>
</body>

</html>