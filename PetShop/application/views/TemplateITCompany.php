<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            .flex-container {
                display: -webkit-flex;
                display: flex;  
                -webkit-flex-flow: row wrap;
                flex-flow: row wrap;
                text-align: center;
            }

            .flex-container > * {
                padding: 15px;
                -webkit-flex: 1 100%;
                flex: 1 100%;
            }

            .article {
                text-align: left;
            }

            header {background: black;color:white;}
            footer {background: #aaa;color:white;}
            .nav {background:#eee;}

            .nav ul {
                list-style-type: none;
                padding: 0;
            }
            .nav ul a {
                text-decoration: none;
            }

            @media all and (min-width: 768px) {
                .nav {text-align:left;-webkit-flex: 1 auto;flex:1 auto;-webkit-order:1;order:1;}
                .article {-webkit-flex:5 0px;flex:5 0px;-webkit-order:2;order:2;}
                footer {-webkit-order:3;order:3;}
            }
            table {
                width:100%;
            }
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;

            }
            th, td {
                padding: 5px;
                text-align: left;
            }
            table tr:nth-child(even) {
                background-color: #eee;
            }
            table tr:nth-child(odd) {
                background-color:#fff;
            }
            table th {
                background-color: black;
                color: white;
            }
        </style>
    </head>

    <body>
        <div class="flex-container"> 
            <header>
                <h1>ITCompany</h1>
            </header>

            <nav class="nav">
                <ul>
                    <li><h1><a  href="/PetShop/ITCompany/candidatesbefore">Candidates before</a></h1></li>
                    <li><h1><a  href="/PetShop/ITCompany/teamsbefore">Teams before</a></h1></li>
                    <li><h1><a  href="/PetShop/ITCompany/teamsafter">Teams after hire</a></h1></li>
                    <li><h1><a  href="/PetShop/ITCompany/candidatesafter">Candidates after hire</a></h1></li>
                    <li><h1><a  href="/PetShop/ITCompany/candidatesfromdb">Get candidates from DB</a></h1></li>
                    <li><h1><a  href="/PetShop/" style="color:blue;" class="active">go to PetShop...</a></h1></li>
                </ul>
            </nav>       

            <article class="article">
                <table>
                    <tbody>
                        <?php include 'application/views/' . $contentView; ?>
                    </tbody>
                </table>
            </article>

            <footer>Copyright &copy; Alexander Zubkov: alexzubkoff123@gmail.com</footer>
        </div>

    </body>
</html>
