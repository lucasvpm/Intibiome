<?php

function produto_post_type() {
	$labels = array(
		'name'                  => 'Produtos',
		'singular_name'         => 'Produtos',
		'menu_name'             => 'Produto',
		'name_admin_bar'        => 'Produtos',
		'archives'              => 'Produtos arquivados',
		'attributes'            => 'Atributos do Produto',
		'parent_item_colon'     => 'Produto pai:',
		'all_items'             => 'Todos os Produtos',
		'add_new_item'          => 'Adicionar novo Produto',
		'add_new'               => 'Adicionar novo',
		'new_item'              => 'Novo Produtos',
		'edit_item'             => 'Editar Produto',
		'update_item'           => 'Atualizar Produto',
		'view_item'             => 'Ver Produto',
		'view_items'            => 'Ver Produtos',
		'search_items'          => 'Procurar Produtos',
		'not_found'             => 'Não encontrado',
		'not_found_in_trash'    => 'Não encontrado no lixo',
		'featured_image'        => 'Imagem destacada',
		'set_featured_image'    => 'Definir imagem destacada',
		'remove_featured_image' => 'Remover imagem destacada',
		'use_featured_image'    => 'Use como imagem destacada',
		'insert_into_item'      => 'Inserir no produto',
		'uploaded_to_this_item' => 'Enviado para este produto',
		'items_list'            => 'Lista de produto',
		'items_list_navigation' => 'Navegação da lista de produto',
		'filter_items_list'     => 'Filtrar lista de produto',
	);
	$rewrite = array(
		'slug'                  => 'produtos',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => 'produtos',
		'labels'                => $labels,
		'supports'              => array( 'title','thumbnail','editor'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-products',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
		'show_in_rest'          => true

	);
	register_post_type( 'produtos', $args );
}
add_action( 'init', 'produto_post_type', 0 );

