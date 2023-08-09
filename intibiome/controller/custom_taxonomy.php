<?php


function categoria_taxonomy() {

	$labels = array(
		'name'                       => 'Categorias',
		'singular_name'              => 'Categorias',
		'menu_name'                  => 'Categorias',
		'all_items'                  => 'Todos os Categoria',
		'parent_item'                => 'Categorias pai',
		'parent_item_colon'          => 'Categorias pai:',
		'new_item_name'              => 'Novo Categoria',
		'add_new_item'               => 'Adicionar novo Categoria',
		'edit_item'                  => 'Editar Categoria',
		'update_item'                => 'Atualizar Categoria',
		'view_item'                  => 'Ver Categoria',
		'separate_items_with_commas' => 'Separe os Categorias com vírgulas',
		'add_or_remove_items'        => 'Adicionar ou remover Categorias',
		'choose_from_most_used'      => 'Escolha entre os mais usados',
		'popular_items'              => 'Categorias populares',
		'search_items'               => 'Pesquisar Categorias',
		'not_found'                  => 'Nenhuma Categoria encontrada',
		'no_terms'                   => 'Nenhuma Categoria',
		'items_list'                 => 'Lista de Categorias',
		'items_list_navigation'      => 'Navegação da lista de Categorias',
	);

	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'has_archive'				 => true,
		'public'                     => true,
		'publicly_queryable'		 => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
	);

	register_taxonomy( 'categoria-produto', array( 'produtos' ), $args );

}
flush_rewrite_rules();
add_action( 'init', 'categoria_taxonomy', 0 );


