{include file="$tpl_dir./breadcrumb.tpl"}
{include file="$tpl_dir./errors.tpl"}
<!-- Left -->
{if isset($category)}
<div class="list_product">
	{if $category->id AND $category->active}

		{if $scenes}
			<!-- Scenes -->
			{include file="$tpl_dir./scenes.tpl" scenes=$scenes}
		{/if}

        <!-- Category image -->
        {if $category->id_image}
         <div class="align_center">
            <img src="{$link->getCatImageLink($category->link_rewrite, $category->id_image, 'category')}" alt="{$category->name|escape:'htmlall':'UTF-8'}" title="{$category->name|escape:'htmlall':'UTF-8'}" id="categoryImage" width="{$categorySize.width}" height="{$categorySize.height}" />
         </div>
        {/if}

		<h1 class="category_title">
        {strip}
		{$category->name|escape:'htmlall':'UTF-8'}
		 <span>
			{if $nb_products == 0}{l s='There are no products.'}
			{else}
				{if $nb_products == 1}{l s='There is'}{else}{l s='There are'}{/if}&#160;
				{$nb_products}&#160;
				{if $nb_products == 1}{l s='product.'}{else}{l s='products.'}{/if}
			{/if}
		 </span>
        {/strip}
		</h1>

        {if $category->description}
         <div class="cat_desc">{$category->description}</div>
        {/if}



		{if isset($subcategories)}
		<!-- Subcategories -->
		<div id="subcategories">
			<ul>
			{foreach from=$subcategories item=subcategory}
				<ol>
					<a href="{$link->getCategoryLink($subcategory.id_category, $subcategory.link_rewrite)|escape:'htmlall':'UTF-8'}" title="{$subcategory.name|escape:'htmlall':'UTF-8'}">
						{if $subcategory.id_image}
						<img src="{$link->getCatImageLink($subcategory.link_rewrite, $subcategory.id_image, 'medium')}" alt="" width="{$mediumSize.width}" height="{$mediumSize.height}" />
						{else}
							<img src="{$img_cat_dir}default-medium.jpg" alt="" width="{$mediumSize.width}" height="{$mediumSize.height}" />
						{/if}
					</a>
                    <li>
					 <h6>
                      <a href="{$link->getCategoryLink($subcategory.id_category, $subcategory.link_rewrite)|escape:'htmlall':'UTF-8'}">
                       {$subcategory.name|escape:'htmlall':'UTF-8'}
                      </a>
                     </h6>
                     <span>{$subcategory.description|escape:'htmlall':'UTF-8'|truncate:100:'...'}</span>
                    </li>
				</ol>
			{/foreach}
			</ul>
		</div>
		{/if}
</div>
		{if $products}
            <div class="list_categorie_product">
            <li id="productsSortForm">
                {if $products}
                    {include file="$tpl_dir./product-sort.tpl"}
                    {include file="$tpl_dir./product-compare.tpl"}
                {/if}
            </li>
				{include file="$tpl_dir./product-list.tpl" products=$products}
                {if $products}
                    {include file="$tpl_dir./pagination.tpl"}
                {/if}
            </div>
			{elseif !isset($subcategories)}
				<p class="warning">{l s='There are no products in this category.'}</p>
			{/if}
  	{elseif $category->id}
		<p class="warning">{l s='This category is currently unavailable.'}</p>
	{/if}
{/if}