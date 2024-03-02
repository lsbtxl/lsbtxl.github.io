<?php
if(!defined("AdminPHP")) exit('<h1 style="color:red">Bad Reuest!</h1> <hr /> Powered By Xlch-AdminPHP');
?>
<?php include(T('_Common/Header'));?><div class="container">
	<div class="block-header">
		<h2>关于</h2>
	</div>
	<div class="card">
		<div class="card-header bgm-cyan">
			<h2>关于本站</h2>
		</div>
		<div class="card-body card-padding row">
			<div class="col-md-12">
				<div class="page-header">
					<h1>关于本站</h1>
				</div>
				<?php include(AppDir.'Config/SysConfig/Info/AboutWebsite.php'); ?>
				<div class="page-header">
					
		<div class="card-header bgm-cyan">
			<h2>关于本程序</h2>
		</div>
		<div class="card-body card-padding row">
			<div class="col-md-12">
				<div class="page-header">
					<h1>简介</h1>
				</div>
				<p>绚丽彩虹同学录为一款轻便、强大、私密的电子同学录程序。</p>
				<p>构想由2017年3月提出，2017年5月编写，采用bootstrap框架，基于PHP7.1开发。</p>
				<p>同学录包含个人主页、同学录、相册、留言板三大功能，在【个人主页】中您可以填写您的个人信息，定制个性化主页。【同学录】将会展示全班每个人的主页。【相册】功能能让您可以自由的上传图片并让同学查看。所有的照片保存期限都是永久的，不像QQ那样过段时间换台手机就没了。</p>
				<p>我们努力将功能做的极简化、精致化，目的是让大家能够更高效的使用，不使部分功能荒废。</p>
			<div class="col-md-12">
				<div class="page-header">
					<h1>保密措施</h1>
				</div>
				<p>本站将会采取一系列手段确保您的个人信息（包括但不仅限于【个人主页】、【相册】、【头像以及自拍】、【账号密码与密保问题】）不被本班级外的人获取，手段包括但不仅限于加密、IP拦截、报警、文件名称加密。但由于技术原因，我们无法确保外部人员一定无法破解本站，因此，您应该自觉保密，不要擅自泄露本站网址、账号密码、其他同学信息等，否则造成的后果由您自行承担。</p>
			</div>
			<div class="col-md-6">
				<div class="page-header">
					<h1>开发历史</h1>
				</div>
				<div class="p-timeline">
					<div class="pt-line c-gray text-right">
						<span class="d-block">2017</span>
							03/21					</div>
					<div class="pt-body">
						<h2 class="ptb-title">提出构想</h2>
					</div>
				</div>
				<div class="p-timeline">
					<div class="pt-line c-gray text-right">
						<span class="d-block">2017</span>
							05/14					</div>
					<div class="pt-body">
						<h2 class="ptb-title">开始绘制设计图</h2>
					</div>
				</div>
				<div class="p-timeline">
					<div class="pt-line c-gray text-right">
						<span class="d-block">2017</span>
							05/20					</div>
					<div class="pt-body">
						<h2 class="ptb-title">开始编写代码</h2>
					</div>
				</div>
				<div class="p-timeline">
					<div class="pt-line c-gray text-right">
						<span class="d-block">2017</span>
						05/29
					</div>
					<div class="pt-body">
						<h2 class="ptb-title">前台基本完工</h2>
					</div>
				</div>
				<div class="p-timeline">
					<div class="pt-line c-gray text-right">
						<span class="d-block">2017</span>
						06/01
					</div>
					<div class="pt-body">
						<h2 class="ptb-title">开始编写后台</h2>
					</div>
				</div>
				<div class="p-timeline">
					<div class="pt-line c-gray text-right">
						<span class="d-block">2017</span>
						06/20
					</div>
					<div class="pt-body">
						<h2 class="ptb-title">开始内测</h2>
					</div>
				</div>
				<div class="p-timeline">
					<div class="pt-line c-gray text-right">
						<span class="d-block">2017</span>
						08/21
					</div>
					<div class="pt-body">
						<h2 class="ptb-title">开始公测</h2>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="page-header">
					<h1>更新日志</h1>
				</div>
				<iframe src="http://api.txl.xlch8.cn/Version.php" frameborder=0 style="min-height:500px;width:100%"></iframe>
			</div>
		</div>
	</div>
</div>
<?php include(T('_Common/Footer'));?>