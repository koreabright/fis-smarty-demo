{%extends file="../common/layout.tpl"%}
{%block name="title"%}<title>第一个页面</title>{%/block%}
{%block name="css"%}{%/block%}

{%block name="main"%}
	<p>bass.css引入了</p>
	<p>{%$info%}</p>
{%/block%}

{%block name="script"%}
<script type="text/javascript">
	// require(['base']);
</script>
{%/block%}
