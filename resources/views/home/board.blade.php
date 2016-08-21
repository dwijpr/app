<?php
$blocks = [
    [1, 0, 1, 0, 1, 0, 1, 0],
    [0, 1, 0, 1, 0, 1, 0, 1],
    [1, 0, 1, 0, 1, 0, 1, 0],
    [0, 1, 0, 1, 0, 1, 0, 1],
    [1, 0, 1, 0, 1, 0, 1, 0],
    [0, 1, 0, 1, 0, 1, 0, 1],
    [1, 0, 1, 0, 1, 0, 1, 0],
    [0, 1, 0, 1, 0, 1, 0, 1],
];
$block_labels = [
    0 => 'black',
    1 => 'white',
];
?>
<style>
.board-wrapper {
    padding-top: 5px;
}
.board-container {
    display: inline-block;
    width: 100%;
}
.board {
    width: 100%;
}
.board-cell {
    width: 12.5%;
    text-align: center;
}
.board-cell:after {
    content: '';
    display: block;
    margin-top: 100%;
}
.board-cell .content {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
}
.board-cell.block-black {
    background: #999;
}
.board-cell.block-white {
    background: #eee;
}
</style>

<div class="board-wrapper text-center">
    <div class="board-container">
        <table class="board" border="1">
            @foreach($blocks as $blockRow)
                <tr>
                    @foreach($blockRow as $block)
                        <td class="board-cell block-{{
                                $block_labels[$block]
                            }}">
                            <div class="content"></div>
                        </td>
                    @endforeach
                </tr>
            @endforeach
        </table>
    </div>
</div>
