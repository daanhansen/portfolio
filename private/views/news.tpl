<link rel="stylesheet" href="../public/css/allpage.css">
<link rel="stylesheet" href="../public/css/news.css">

<h1 id="title_of_page">News</h1> <br>

<ul id="artul">


    <div class="contentholder">
    {foreach from=$articles item=article}
        <div class="newsitem">
            <img src="{$article[2]}" class="artimg">
            <h2>{$article[0]}</h2>
            <p>{$article[1]}</p>
        </div>
    {/foreach}
    </div>

</ul>




<div id="pagination">
        <div class="pagecounter">
            {if $current_page gt 1}
                <a href="index.php?page=news&pageno={$current_page -1}"><<</a>
            {/if}
            <p>{$current_page}</p>
            {if $current_page lt $number_of_pages}
                <a href="index.php?page=news&pageno={$current_page +1}">>></a>
            {/if}
        </div>
</div>