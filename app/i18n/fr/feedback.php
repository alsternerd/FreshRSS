<?php

return array(
	'admin' => array(
		'optimization_complete' => 'Optimisation terminée.',
	),
	'access' => array(
		'denied' => 'Vous n’avez pas le droit d’accéder à cette page !',
		'not_found' => 'La page que vous cherchez n’existe pas !',
	),
	'auth' => array(
		'form' => array(
			'not_set' => 'Un problème est survenu lors de la configuration de votre système d’authentification. Veuillez réessayer plus tard.',
			'set' => 'Le formulaire est désormais votre système d’authentification.',
		),
		'login' => array(
			'invalid' => 'L’identifiant est invalide',
			'success' => 'Vous êtes désormais connecté',
		),
		'logout' => array(
			'success' => 'Vous avez été déconnecté',
		),
		'no_password_set' => 'Aucun mot de passe administrateur n’a été précisé. Cette fonctionnalité n’est pas disponible.',
		'not_persona' => 'Seul le système d’authentification Persona peut être réinitialisé.',
	),
	'conf' => array(
		'error' => 'Une erreur est survenue durant la sauvegarde de la configuration',
		'query_created' => 'Le filtre "%s" a bien été créé.',
		'shortcuts_updated' => 'Les raccourcis ont été mis à jour.',
		'updated' => 'La configuration a été mise à jour',
	),
	'import_export' => array(
		'export_no_zip_extension' => 'L’extension Zip n’est pas présente sur votre serveur. Veuillez essayer d’exporter les fichiers un par un.',
		'feeds_imported' => 'Vos flux ont été importés et vont maintenant être actualisés.',
		'feeds_imported_with_errors' => 'Vos flux ont été importés mais des erreurs sont survenues.',
		'file_cannot_be_uploaded' => 'Le fichier ne peut pas être téléchargé !',
		'no_zip_extension' => 'L’extension Zip n’est pas présente sur votre serveur.',
		'zip_error' => 'Une erreur est survenue durant l’import du fichier Zip.',
	),
	'sub' => array(
		'category' => array(
			'created' => 'La catégorie %s a été créée.',
			'deleted' => 'La catégorie a été supprimée.',
			'emptied' => 'La catégorie a été vidée.',
			'error' => 'La catégorie n’a pas pu être modifiée',
			'name_exists' => 'Une catégorie possède déjà ce nom.',
			'no_id' => 'Vous devez préciser l’id de la catégorie.',
			'no_name' => 'Vous devez préciser un nom pour la catégorie.',
			'not_delete_default' => 'Vous ne pouvez pas supprimer la catégorie par défaut !',
			'not_exist' => 'Cette catégorie n’existe pas !',
			'over_max' => 'Vous avez atteint votre limite de catégories (%d)',
			'updated' => 'La catégorie a été mise à jour.',
		),
		'feed' => array(
			'actualized' => '<em>%s</em> a été mis à jour.',
			'actualizeds' => 'Les flux ont été mis à jour.',
			'added' => 'Le flux <em>%s</em> a bien été ajouté.',
			'already_subscribed' => 'Vous êtes déjà abonné à <em>%s</em>',
			'deleted' => 'Le flux a été supprimé.',
			'error' => 'Une erreur est survenue',
			'internal_problem' => 'Le flux ne peut pas être ajouté. <a href="%s">Consulter les logs de FreshRSS</a> pour plus de détails.',
			'invalid_url' => 'L’url <em>%s</em> est invalide.',
			'marked_read' => 'Les flux ont été marqués comme lus.',
			'n_actualized' => '%d flux ont été mis à jour.',
			'n_entries_deleted' => '%d articles ont été supprimés.',
			'no_refresh' => 'Il n’y a aucun flux à actualiser…',
			'not_added' => '<em>%s</em> n’a pas pu être ajouté.',
			'over_max' => 'Vous avez atteint votre limite de flux (%d)',
			'updated' => 'Le flux a été mis à jour',
		),
		'purge_completed' => 'Purge effectuée (%d articles supprimés).',
	),
	'user_profile' => array(
		'updated' => 'Votre profil a été mis à jour',
	),
);
