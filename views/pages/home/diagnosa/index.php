<h1 class="content-header">Diagnosa</h1>
<hr class="line">

<div class="wrapper">
    <form method="POST">
        <div class="element">
            <h2>Pilih Gejala</h2>
            <?php
            foreach ($data as $item) : ?>
                <div class="el-child">
                    <div class="ui-checkbox bg-limegreen ui-small ui-animation-zoom">
                        <input type="checkbox" value="<?= $item['kode'] ?>" id="<?= $item['kode']; ?>" name="input[]"><span data-checked="&#10004;" />
                    </div>
                    <label for="<?= $item['kode']; ?>"><?= $item['nama']; ?></label>
                </div>
            <?php endforeach; ?>
        </div>
        <input class="btn" name="proses" type="submit">
    </form>
</div>

<style>
    .wrapper {
        display: grid;
        grid-template-columns: auto auto;
        grid-gap: 30px;
        width: 90%;
        margin: auto;
    }

    .element {
        box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.1);
        padding: 10px;
        border: 1px solid #DDD;
        font-size: 14px;
        font-weight: bold;
        color: #555;
    }

    .element .el-child+.el-child {
        margin-top: 10px;
    }

    .element h2 {
        padding: 10px;
        text-align: center;
        margin: 0;
        border-bottom: 1px solid #CCC;
        margin-bottom: 10px;
    }

    .ui-checkbox {
        display: inline-block;
        position: relative;
        border: 1px solid gray;
        border-radius: 5px;
        perspective: 100px;
        transform-style: preserve-3d;
        vertical-align: middle;
    }

    .ui-checkbox input {
        padding: 0;
        margin: 0;
        opacity: 0;
        position: relative;
        z-index: 100;
        width: 20px;
        height: 20px;
    }

    .ui-checkbox [data-checked]:before,
    .ui-checkbox .ui-checked {
        content: attr(data-checked);
        display: block;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        visibility: hidden;
    }

    .ui-checkbox [data-unchecked]:after,
    .ui-checkbox .ui-unchecked {
        content: attr(data-unchecked);
        display: block;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        visibility: hidden;
    }

    .ui-checkbox input:checked+[data-checked]:before,
    .ui-checkbox input:checked+.ui-custom .ui-checked {
        visibility: visible;
    }

    .ui-checkbox input:not(:checked)+[data-unchecked]:after,
    .ui-checkbox input:not(:checked)+.ui-custom .ui-unchecked {
        visibility: visible;
    }

    .ui-checkbox.noround {
        border-radius: none !important;
        border: none !important;
    }

    .ui-checkbox.round {
        border-radius: 50%;
    }

    /* Color */
    .ui-checkbox.bg-limegreen {
        border-width: 2px;
        border-style: solid;
    }

    .ui-checkbox.bg-limegreen {
        border-color: limegreen;
        background-color: transparent;
        color: limegreen;
    }

    .ui-small {
        width: 20px;
        height: 20px;
    }

    .ui-small [data-checked]:before,
    .ui-small [data-unchecked]:after,
    .ui-small .ui-custom {
        font-size: 16px;
    }

    .ui-small input {
        width: 20px;
        height: 20px;
    }

    /* zoom Animation */
    .ui-checkbox.ui-animation-zoom [data-checked]:before,
    .ui-checkbox.ui-animation-zoom .ui-checked {
        transition: transform 1s cubic-bezier(0, .98, .21, .96);
        transform: translateX(-50%) translateY(-50%) translateZ(-100px);
    }

    .ui-checkbox.ui-animation-zoom [data-unchecked]:after,
    .ui-checkbox.ui-animation-zoom .ui-unchecked {
        transition: transform 1s cubic-bezier(0, .98, .21, .96);
        transform: translateX(-50%) translateY(-50%) translateZ(-100px);
    }

    .ui-checkbox.ui-animation-zoom input:checked+[data-checked]:before,
    .ui-checkbox.ui-animation-zoom input:checked+.ui-custom .ui-checked {
        visibility: visible;
        transform: translateX(-50%) translateY(-50%) translateZ(0px);
    }

    .ui-checkbox.ui-animation-zoom input:not(:checked)+[data-unchecked]:after,
    .ui-checkbox.ui-animation-zoom input:not(:checked)+.ui-custom .ui-unchecked {
        visibility: visible;
        transform: translateX(-50%) translateY(-50%) translateZ(0px);
    }

    label {
        margin-left: 5px;
        margin-right: 5px;
    }
</style>