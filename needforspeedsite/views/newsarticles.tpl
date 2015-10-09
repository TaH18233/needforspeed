
<section id="content">
    <section id="articles">
        <article>
    {foreach from=$data item=newsitem}

        <h1>{$newsitem.title}</h1>
        <content>{$newsitem.text}</content>
    {/foreach}
        </article>
    </section>
