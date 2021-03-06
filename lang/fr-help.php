<?php
if (!defined("PLX_ROOT")) exit;
?>


<p align="center"><span style="font-family: Liberation Sans,sans-serif;"><span style="font-size: xx-large;"><b>PlxMyShop</b></span></span></p>
<p align="center"><span style="font-size: small;">Version 0.9.4 beta</span></p>

<h1 class="western"><span style="text-decoration: underline;">Sommaire</span></h1>
<ul>
	<li>
<p align="left"><span style="font-size: medium;"><a>Installation</a></span></p>
</li>
	<li>
<p align="left"><span style="font-size: medium;"><a>Configuration</a></span></p>
</li>
	<li>
<p align="left"><span style="font-size: medium;"><a>Création d'un produit</a></span></p>
</li>
	<li>
<p align="left"><span style="font-size: medium;"><a>Création d'une catégorie de produit</a></span></p>
</li>
	<li>
<p align="left"><span style="font-size: medium;"><a>Liste des commandes</a></span></p>
</li>
</ul>
<h1 class="western"><a name="2.Installation|outline"></a><span style="text-decoration: underline;">Installation</span></h1>
Extraire l'archive zip dans le répertoire <b>plugins</b> de pluxml. Ensuite dans l'administration de pluxml dans le menu <b>Paramètres&gt;plugins</b>, dans la section <b>Plugins inactifs</b>, coché et activer plxMyShop. Une fois activé plxMyShop se trouvera dans la section <b>Plugins actifs</b>.

&nbsp;
<h1 class="western"><a name="3.Configuration|outline"></a><span style="text-decoration: underline;">Configuration</span></h1>
Dans <b>Plugins actifs </b>ou<b> inactifs </b>cliquez sur <b>Configuration</b> de plxMyShop. Dans cette page vous pourrez configurer :
<ul>
	<li><a>les informations relatives au commerçant</a></li>
	<li><a>les modules paiement/livraison</a>
<ul>
	<li><a>Module de livraison (basé sur Socolissimo recommandé)</a></li>
	<li><a>Paypal</a></li>
</ul>
</li>
	<li><a>les </a><a>mails</a><a> de commande </a><a>pour le client et le commerçant</a></li>
	<li><a>la position dans le menu pour les catégories</a></li>
	<li><a>le template par défaut pour les pages produit et catégorie</a></li>
</ul>
<h2 class="western"><a name="3.1.Informations relatives au commerçant|outline"></a> Informations relatives au commerçant</h2>
Entrer dans les différents champs les informations d'adressage du commerçant utilisés en entre autres par le module chèque. Veuillez aussi renseigner le nom de la boutique.

&nbsp;
<h2 class="western"><a name="3.2.Modules paiement/livraison|outline"></a> Modules paiement/livraison</h2>
Activer ou pas les modules de paiement/livraison désirés.
<h3 class="western"><a name="3.2.1.Socolissimo Recommandé|outline"></a> Socolissimo Recommandé</h3>
La configuration du module de livraison Socolissimo Recommandé est vraiment simple.

Une fois activé, il vous suffira d'indiquer dans le tableau les poids et les tarifs correspondant. La particularité réside dans le fait que vous pourrez mettre à jour vos tarifications de livraison à la volé. Il est possible qu'il est un supplément de tarification si vous voulez recevoir l'accusé de réception. Pour cela indiquer la somme dans le champs « Accuser de réception ».

Noté que ce module se base sur vos indications, vous pourrez l'utiliser pour d'autre tarification de livraison <i>(autre que Socolissimo recommandé)</i>

&nbsp;
<h3 class="western"><a name="3.2.1.Paypal|outline"></a>Paypal</h3>
La configuration de Paypal nécessite que vous ayez deux jeux d'identifiants commerçant, un jeu pour la phase de test et l'autre pour la phase de mise en production. Ces identifiants <span style="color: #000000;"><span style="font-family: Arial,Geneva,Helvetica,sans-serif;"><span style="font-size: small;">compr</span></span></span><span style="color: #000000;"><span style="font-family: Arial,Geneva,Helvetica,sans-serif;"><span style="font-size: small;">ennent </span></span></span>
<ul>
	<li>Un identifiant commerçant</li>
	<li>Un mot de passe</li>
	<li>Une signature</li>
</ul>
Ensuite vous devrez renseigner les informations suivante :
<ul>
	<li>Code de device, par défaut «EUR»</li>
	<li>Nom de description de la boutique</li>
	<li>Url <i>avec le HTTP </i>de retour</li>
	<li>Url <i>avec le HTTP </i>d'annulation</li>
	<li>Url <i>avec le HTTP </i>du retour automatique IPN</li>
	<li>Url <i>avec le HTTP </i>du logo de la boutique, par défaut le logo de plxMyShop</li>
	<li>le code couleur global de la page Paypal, par défaut #296899</li>
	<li>le code couleur des bordure de la page Paypal, par défaut #296899</li>
</ul>
&nbsp;
<h2 class="western"><a name="3.4.Template par défaut pour les pages produit|outline"></a></h2>
<h2 class="western"><a name="3.3.Mails de commande pour le client et le commerçant|outline"></a><a name="3.3.Mails de commande pour le client et le commerçant|outline"></a><a name="3.3.Mails de commande pour le client et le commerçant|outline"></a><a name="3.3.Mails de commande pour le client et le commerçant|outline"></a> Mails de commande pour le client et le commerçant</h2>
Entrez les adresse mail utilisé pour recevoir les mails des commandes effectué. Vous pouvez aussi définir le titre de vos mails, pour le mail commerçant ainsi que celui du client.
<h2 class="western"><a name="3.4.Position dans le menu pour les catégories|outline"></a> Position dans le menu pour les catégories</h2>
Il est possible à la création d'une catégorie de l'afficher dans le menu principal du site. Cette option vous permettra de définir sa position par défaut.
<h2 class="western">Template par défaut pour les pages produit et catégorie</h2>
Cette option vous permettra de définir le template utilisé par défaut par vos page de fiche produit et catégorie de produit.

&nbsp;

&nbsp;
<h1 class="western"><a name="4.Création d'un produit|outline"></a><span style="text-decoration: underline;">Création d'un produit</span></h1>
Une fois plxMyShop d'activé, un nouveau menu apparaît dans l'administration de pluxml en dessous des pages statiques. Ce menu porte le nom de votre boutique ainsi que le numéro de version du plxMyShop

Dans ce menu en haut de page vous avez quatre boutons :
<ul>
	<li>Liste des produits</li>
	<li>Liste des catégories</li>
	<li>Liste des commandes</li>
	<li>Configuration</li>
</ul>
&nbsp;

Dans <b>Liste des produit</b>, pour créer un produit il vous suffit de faire la même chose que pour créer une page statique. Renseigner le nom de votre produit, activez le ou pas et ensuite cliquer sur le bouton <b>Modifier la liste des produits</b>. Une fois créer cliquer sur le lien <b>éditer</b> à la droite du produit pour accéder à la page d'édition.

&nbsp;

Dans la page d'édition du produit, veuillez renseigner le lien de l'image du produit, que le lien soit en relatif ou absolue ne pose aucun problème, en utilisant le bouton vous pourrez directement choisir une image disponible dans votre zone de média. Ensuite taper une description et renseignez le prix affiché du produit. Faite de même pour le poids et la devise affichée. Si le poids n'est pas renseigner ou égal à zéro il ne sera pas prix en compte. Ensuite comme pour les pages statiques, veuillez renseigner le template utilisé et les informations des balise méta.

Cliquer sur le bouton <b>Enregistrer ce produit</b>.

Pour visualiser le produit en frontale, cliquer sur le lien <b>VOIR</b> à coter du lien <b>Éditer</b> à la droite des produits dans le listing

&nbsp;
<h1 class="western"><a name="5.Création d'une catégorie de produit|outline"></a> <span style="text-decoration: underline;">Création d'une catégorie de produit</span></h1>
A quelques détails près le processus de création est exactement le même que celui d'un produit.

&nbsp;

Pour attribuer un produit à une catégorie, il vous suffira d'indiquer l'identifiant de la catégorie en question dans le champs «ID catégorie »  du listing des produits. Si vous souhaitez attribuer plusieurs catégorie à un produit, séparer les identifiants de catégorie par une virgule.

Comme indiquer plus haut, vous avez la possibilité d'afficher vos catégories dans le menu principal du site.

&nbsp;
<h1 class="western"><a name="6.Liste des commandes|outline"></a> <span style="text-decoration: underline;">Liste des commandes</span></h1>
La liste des commandes vous permettra d'avoir un visuel rapide des commandes effectuées. Vous pourrez les supprimer et/ou voir le mail envoyé au client. <i>(je compte l'améliorer dans le futur)</i>

&nbsp;