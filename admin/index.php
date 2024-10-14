<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap');
    body{
        margin: 0;
        font-family: 'Merriweather', serif;

    }
    
    section{
        display: flex;
    }

    .side-bar{
        left: 0;
        height: 100vh;
        width: 300px;
        background-color: #edf2fb;
        color: #003f88;
    }

    .container{
        height: 100vh;
        padding: 0 15px;
        display: flex;
        flex-direction: column;
    }

    .header{
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 15px 0;
    }

    .logo{
        i{
            font-size: 24px;
            text-transform: uppercase;
        }
    }

    .btn-collapse{
        display: flex;
        flex-direction: column;
        gap: 5px;
        cursor: pointer;
        div{
            height: 3px;
            width: 25px;
            background-color: #003f88;
        }
    }

    .content{
        padding: 15px 0;
        font-size: 18px;
    }

    .list{
        margin: 0;
        padding: 0;
    }

    .item{
        margin: 8px 0;
        padding: 15px;
        list-style: none;
        text-transform: capitalize;
        border-radius: 10px;
        cursor: pointer;
    }

    .item:hover:not(.active){
        background-color: lightcyan
    }

    .active{
        background-color: white;
    }

    .footer{
        margin-top: auto;
        padding: 15px 0;
    }

    .actions{
        display: flex;
        align-items: center;
        justify-content: space-between;
        font-size: 24px;
        span{
            cursor: pointer;
        }
    }

</style>
<body>
    <section>
    <div class="side-bar">
        <div class="container">
            <div class="header">
                <div class="logo">
                    <i>bookstore</i>
                </div>
                <div class="btn-collapse">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div class="content">
                <ul class="list">
                    <li class="item active">📊 dashboard</li>
                    <li class="item">📦 stock</li>
                    <li class="item">🙍‍♂️ users</li>
                    <li class="item">🔑 license</li>
                </ul>
            </div>
            <div class="footer">
                <div class="actions">
                    <span>⚙️</span>
                    <span>🚪</span>
                </div>
            </div>
        </div>
    </div>
    <?php
        include 'pages/Dashboard.php';
    ?>
    </section>
</body>
</html>