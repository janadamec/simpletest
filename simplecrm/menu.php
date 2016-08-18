<style>

    .menu_1 ul {
        position: relative;
        margin: 10px;
        padding: 0;
        list-style: none;
        text-align:center;
    }

    .menu_1 ul::before {
        content: "";
        position: absolute;
        z-index: 20;
        left: 0;
        top: 0;
        display: block;
        width: 0;
        height: 0;
        border: solid transparent;
        border-width: 25px 0;
        border-left: 15px solid #eee;
    }

    .menu_1 ul li {
        position: relative;
        float: left;
        display: block;
        margin: 0;
        padding: 0;
        list-style: none;

    }

    .menu_1 ul li a {
        position: relative;
        display: block;
        color: black;
        text-decoration: none;
        padding: 0 20px 0 40px;
        color: #bff;
        background: #28e;
    }

    .menu_1 ul li a::before {
        content: "";
        position: absolute;
        z-index: 10;
        right: -16px;
        top: 50%;
        display: block;
        margin-top: -25px;
        width: 0;
        height: 0;
        border: solid transparent;
        border-width: 25px 0;
        border-left: 15px solid #eee;
    }

    .menu_1 ul li a::after {
        content: "";
        position: absolute;
        z-index: 15;
        right: -15px;
        top: 50%;
        display: block;
        margin-top: -25px;
        width: 0;
        height: 0;
        border: solid transparent;
        border-width: 25px 0;
        border-left: 15px solid #28e;
    }

    .menu_1 ul li a:hover
    { background: #16b }

    ul li a:hover::after
    { border-left-color: #16b }
</style>


<div class="menu_1">
<ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">Products</a></li>
    <li><a href="#">Services</a></li>
    <li><a href="#">About Us</a></li>
</ul>

    </div>
  