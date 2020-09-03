<style>
    @page {
        margin: 0cm 0cm;
    }
    @font-face {
        font-family: Tahoma;
        font-weight: normal;
        font-style: normal;
        font-variant: normal;
        src: url('files/assets/fonts/tahoma.ttf') format("truetype");
    }

    header {
        position        : absolute;
        margin-top      : -3.2cm;
        margin-left     : -2.54cm;
        background-repeat: no-repeat;
    }

    header img {
        width           : 21cm;
        z-index         : -1;
    }

    footer {
        position        : absolute;
        bottom          : 0cm;
        margin-bottom   : -1.8cm;
        margin-left     : -2.54cm;
        background-repeat: no-repeat;
    }
    footer img {
        width           : 21cm;
        z-index         : -1;
    }

    .drafter {
        position    : absolute; 
        bottom      : 0.25cm; 
        font-size   : 8pt;
        font-style  : italic;
    }

    .tembusan {
        position: absolute;
        bottom  : 0.75cm;
        font-size: 11pt;
    }

    body {
        margin-top      : 3.2cm;
        margin-bottom   : 1.8cm;
        margin-left     : 2.54cm;
        margin-right    : 2.54cm;
        line-height     : 1.35;
        font-family     : Tahoma, sans-serif;
    }
    body p , li, td {
        font-size       : 11pt;
        line-height     : 1.35;
    }

    .heading td {
        border: none;
        vertical-align:top;
        font-size : 11pt;
        padding: 0;
    }

    .page-break {
        page-break-after: always;
    }

    #clear {
        margin: 0;
        padding: 0;
        font-size: 0;
        height: 0;
        line-height: 0;
        clear: both;
    }

    .disposisi {
        border-collapse: collapse;
        width: 100%;
    }

    table.disposisi td, th {
        border: 1px solid black;
        font-size: 9pt;
    }

    .label {
        width: 100%;
        margin: -75px -50px -75px -50px;
        padding: 10px 30px 10px 30px;
        border: 1px solid black;
        border-radius: 30%;
    }

    #watermark {
        position: absolute;
        margin-top: 13cm;
        margin-left: -150px;
        z-index: -1;
        opacity: 0.35;
        -webkit-transform: rotate(-52deg);
        -moz-transform: rotate(-75deg);
    }
</style>

