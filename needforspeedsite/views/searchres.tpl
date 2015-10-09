<style>
    .article{
        color:white;
        text-align: center;
    }
    #searchval{
        color: red;
        text-align: center;
        text-shadow: 8px 7px 8px yellow;
    }
</style>

<section>
<h1 id="searchval">{$searchval|upper}</h1>
{foreach from=$result item=newsItem}

<div class="article">
<h1 class="articletitle">{$newsItem.title|ucfirst}</h1>
<p class="articletext"><b>{$newsItem.text}</b></p>
</div>

{/foreach}
</section>
