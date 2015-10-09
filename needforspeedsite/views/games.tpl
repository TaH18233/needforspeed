<style>
    .content{
        color white;
        margin: auto;
        width: 94%;
        height: auto;
        padding: 5px;
    }

    .video{
        width: 100%;
        height: 300px;
        margin: 30px 0;

    }

    .video iframe{
        float: left;
        margin-left: 2%;
        box-shadow: 0px 9px 10px -2px yellow;
    }

    .text{
        text-align: left;
        color: red;
        font-size: 20px;
        text-shadow: 8px 7px 8px yellow;
        float: right;
        width: 50%;
        height: 290px;
        padding: 5px;
        overflow: hidden;
    }

    .text p{
        text-shadow: none;
        float: left;
        color: white;
        width: 60%;
        margin: 20px auto;
        text-align: left;
        font-family: sans-serif;
    }

    @media (max-width: 700px) {
        .video iframe{
            width: 100%;
        }

        .text{
            margin-bottom: 20px;
            width: 100%;
            height: 200px;
        }
    }

    #img{
        width: 200px;
        height: 290px;
        float: right;
        box-shadow: 0px 9px 10px -2px yellow;
    }
</style>
<div id="paginationnews">
    <ul>
        {for $i=1 to $pages}
            <li>
                <a href="?page=games&page_nr={$i}" id="pagenum{$i}">{$i}</a>
            </li>
        {/for}
    </ul>
</div>

<div class="content">
    {foreach from=$result item=games}
        <div class="video">
            <iframe width="40%" height="100%" src="{$games.video}" frameborder="0" allowfullscreen></iframe>
            <div class="text">
                <img id="img" src="images/gamecovers/{$games.image}">
                {$games.title}
                {$games.info}
            </div>
        </div>
    {/foreach}


