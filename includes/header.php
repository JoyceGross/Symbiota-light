<?php
if($LANG_TAG == 'en' || !file_exists($SERVER_ROOT.'/content/lang/templates/header.' . $LANG_TAG . '.php'))
	include_once($SERVER_ROOT . '/content/lang/templates/header.en.php');
else include_once($SERVER_ROOT . '/content/lang/templates/header.' . $LANG_TAG . '.php');
if($LANG_TAG == 'en' || !file_exists($SERVER_ROOT.'/content/lang/templates/header.' . $LANG_TAG . '.override.php'))
	include_once($SERVER_ROOT . '/content/lang/templates/header.en.override.php');
else include_once($SERVER_ROOT . '/content/lang/templates/header.' . $LANG_TAG . '.override.php');
$SHOULD_USE_HARVESTPARAMS = $SHOULD_USE_HARVESTPARAMS ?? false;
$collectionSearchPage = $SHOULD_USE_HARVESTPARAMS ? '/collections/index.php' : '/collections/search/index.php';
?>
<div class="header-wrapper">
	<header>
		<div class="top-wrapper">
			<a class="screen-reader-only" href="#end-nav"><?= $LANG['H_SKIP_NAV'] ?></a>
			<nav class="top-login" aria-label="horizontal-nav">
				<?php
				if ($USER_DISPLAY_NAME) {
					?>
					<div class="welcome-text bottom-breathing-room-rel">
						<?= $LANG['H_WELCOME'] . ' ' . $USER_DISPLAY_NAME ?>!
					</div>
						<span id="profile">
							<form name="profileForm" method="post" action="<?= $CLIENT_ROOT . '/profile/viewprofile.php' ?>">
								<button class="button button-tertiary bottom-breathing-room-rel left-breathing-room-rel" name="profileButton" type="submit"><?= $LANG['H_MY_PROFILE'] ?></button>
							</form>
						</span>
						<span id="logout">
							<form name="logoutForm" method="post" action="<?= $CLIENT_ROOT ?>/profile/index.php?submit=logout">
								<button class="button button-secondary bottom-breathing-room-rel left-breathing-room-rel" name="logoutButton" type="submit"><?= $LANG['H_LOGOUT'] ?></button>
							</form>
						</span>
						<?php
          } else {
						?>
						<span id="login">
							<form name="loginForm" method="post" action="<?= $CLIENT_ROOT . "/profile/index.php" ?>">
								<input name="refurl" type="hidden" value="<?= htmlspecialchars($_SERVER['SCRIPT_NAME'], ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE) . "?" . htmlspecialchars($_SERVER['QUERY_STRING'], ENT_QUOTES) ?>">
								<button class="button button-secondary bottom-breathing-room-rel left-breathing-room-rel" name="loginButton" type="submit"><?= $LANG['H_LOGIN'] ?></button>
							</form>
						</span>
						<?php
					}
        ?>
			</nav>
			<div class="top-brand">
				<div class="image-container">
					<img src="<?= $CLIENT_ROOT ?>/images/layout/PCC_logo_banner.png" alt="Pteridophyte Collections Consortium logo">
				</div>
				<div class="brand-name">
					<h1><?= $LANG['PCC'] ?></h1>
					<h2><?= $LANG['PCC_EXPLAIN'] ?></h2>
				</div>
			</div>
		</div>
		<div class="menu-wrapper">
			<!-- Hamburger icon -->
			<input class="side-menu" type="checkbox" id="side-menu" name="side-menu" />
			<label class="hamb hamb-line hamb-label" for="side-menu" tabindex="0">☰</label>
			<!-- Menu -->
			<nav class="top-menu" aria-label="hamburger-nav">
				<ul class="menu">
					<li>
						<a href="<?= $CLIENT_ROOT ?>/index.php">
							<?= $LANG['H_HOME'] ?>
						</a>
					</li>
					<li>
						<a href="#" >
							<?= $LANG['H_SEARCH'] ?>
						</a>
						<ul>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/collections/search/index.php" ><?= $LANG['H_COLLECTIONS'] ?></a>
							</li>
							<li>
							<a href="<?= $CLIENT_ROOT ?>/collections/map/index.php" rel="noopener noreferrer">
								<?= $LANG['H_MAP_SEARCH'] ?>
							</a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=checklist" ><?=$LANG['H_DYN_LISTS']; ?></a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/collections/exsiccati/index.php" >Exsiccati</a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/taxa/taxonomy/taxonomydynamicdisplay.php" ><?= $LANG['H_TAXONOMIC_EXPLORER']; ?></a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#" >Images</a>
						<ul>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/imagelib/index.php" ><?= $LANG['H_IMAGE_BROWSER'] ?></a>
							</li>
							<li>
							<a href="<?= $CLIENT_ROOT ?>/imagelib/search.php">
							<?= $LANG['H_IMAGE_SEARCH'] ?>
						</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=1" ><?= $LANG['H_INVENTORIES']; ?></a>
						<ul>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=1"><?= $LANG['H_NORTH_AMER']; ?></a>
							</li>
						</ul>
					</li>
					<li>
						<a href="<?= $CLIENT_ROOT; ?>/collections/specprocessor/crowdsource/index.php" >Crowdsource</a>
					</li>
					<li>
						<a href="#" ><?= $LANG['H_CONTACTS']; ?></a>
						<ul>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/collections/misc/collprofiles.php" ><?= $LANG['H_PARTNERS']; ?></a>
							</li>
							<!--
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/misc/contacts.php" ><?= $LANG['H_CONTACTS']; ?></a>
							</li>
							-->
						</ul>
					</li>
					<li>
						<a href="#" ><?= $LANG['ABOUT'] ?></a>
							<ul>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/misc/acknowledgements.php" ><?= $LANG['ACKNOWLEDGEMENTS'] ?></a>
							</li>
														<li>
								<a href="<?= $CLIENT_ROOT; ?>/includes/usagepolicy.php" ><?= $LANG['DATA_USE_CITATION'] ?></a>
							</li>
						</ul>
					</li>
					<li>
						<a href='<?= $CLIENT_ROOT ?>/sitemap.php'>
							<?= $LANG['H_SITEMAP'] ?>
						</a>
					</li>
					<li id="lang-select-li">
						<label for="language-selection"><?= $LANG['H_SELECT_LANGUAGE'] ?>: </label>
						<select oninput="setLanguage(this)" id="language-selection" name="language-selection">
							<option value="en">English</option>
							<option value="es" <?= ($LANG_TAG=='es'?'SELECTED':'') ?>>Español</option>
							<option value="fr" <?= ($LANG_TAG=='fr'?'SELECTED':'') ?>>Français</option>
						</select>
					</li>
				</ul>
			</nav>
		</div>
		<div id="end-nav"></div>
	</header>
</div>
