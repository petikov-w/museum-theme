<?php
/**
 * Добавление нового виджета WorkSchedule_Widget.
 */
class WorkSchedule_Widget extends WP_Widget {

	// Регистрация виджета используя основной класс
	function __construct() {
		// вызов конструктора выглядит так:
		// __construct( $id_base, $name, $widget_options = array(), $control_options = array() )
		parent::__construct(
			'workschedule_widget', // ID виджета, если не указать (оставить ''), то ID будет равен названию класса в нижнем регистре: socialnetwork
			__('График работы', 'museum'),
			array( 'description' => __('График работы', 'museum'), 'classname' => 'widget-workschedule',)
		);

		// скрипты/стили виджета, только если он активен
		if ( is_active_widget( false, false, $this->id_base ) || is_customize_preview() ) {
			add_action('wp_enqueue_scripts', array( $this, 'add_workschedule_widget_scripts' ));
			add_action('wp_head', array( $this, 'add_workschedule_widget_style' ) );
		}
	}

	/**
	 * Вывод виджета во Фронт-энде
	 *
	 * @param array $args     аргументы виджета.
	 * @param array $instance сохраненные данные из настроек
	 */
	function widget( $args, $instance ) {

		$title = $instance['title'];
		$field_1 = $instance['field_1'];
		$field_2 = $instance['field_2'];
		$icon_clock = get_template_directory_uri().'/assets/images/sprite.svg#clock';

		echo $args['before_widget'];

		if ( ! empty( $title ) ) {
			echo '<div class="clock-title">' . '<svg width="15" height="15" class="icon icon-clock">
                  <use xlink:href="' . $icon_clock . '""></use></svg>' . $args['before_title'] . $title .
                  $args['after_title'] . '</div>';
		}
		echo '<div class="set-fields-shedule">';
		if ( ! empty( $field_1 ) ) {
			echo '<span>' . $field_1 . '</span>';
		}
		if ( ! empty( $field_2 ) ) {
			echo '<span>' . $field_2 . '</span>';
		}
		echo '</div>';
		echo $args['after_widget'];
	}

	/**
	 * Админ-часть виджета
	 *
	 * @param array $instance сохраненные данные из настроек
	 */
	function form( $instance ) {
		$title = @ $instance['title'] ?: __('Заголовок по умолчанию', 'museum');
		$field_1 = @ $instance['field_1'] ?: 'часы работы,выходные';
		$field_2 = @ $instance['field_2'] ?: 'часы работы,выходные';
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Заголовок:' , 'museum'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php
			echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'field_1' ); ?>"><?php _e( 'Часы работы:' , 'museum' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'field_1' ); ?>" name="<?php
			echo $this->get_field_name( 'field_1' ); ?>" type="text" value="<?php echo esc_attr( $field_1 ); ?>">
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'field_2' ); ?>"><?php _e( 'Часы работы:'  , 'museum' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'field_2' ); ?>" name="<?php
			echo $this->get_field_name( 'field_2' ); ?>" type="text" value="<?php echo esc_attr( $field_2 ); ?>">
		</p>
		<?php
	}

	/**
	 * Сохранение настроек виджета. Здесь данные должны быть очищены и возвращены для сохранения их в базу данных.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance новые настройки
	 * @param array $old_instance предыдущие настройки
	 *
	 * @return array данные которые будут сохранены
	 */
	function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['field_1'] = ( ! empty( $new_instance['field_1'] ) ) ? strip_tags( $new_instance['field_1'] ) : '';
		$instance['field_2'] = ( ! empty( $new_instance['field_2'] ) ) ? strip_tags( $new_instance['field_2'] ) : '';

		return $instance;
	}

	// скрипт виджета
	function add_workschedule_widget_scripts() {
		// фильтр чтобы можно было отключить скрипты
		if( ! apply_filters( 'show_my_widget_script', true, $this->id_base ) )
			return;

		$theme_url = get_stylesheet_directory_uri();

		wp_enqueue_script('my_widget_script', $theme_url .'/my_widget_script.js' );
	}

	// стили виджета
	function add_workschedule_widget_style() {
		// фильтр чтобы можно было отключить стили
		if( ! apply_filters( 'show_my_widget_style', true, $this->id_base ) )
			return;
		?>
		<style type="text/css">
            .my_widget a{ display:inline; }
		</style>
		<?php
	}

}
// конец класса WorkSchedule_Widget

// регистрация WorkSchedule_Widget в WordPress
function register_workschedule_widget() {
	register_widget( 'WorkSchedule_Widget' );
}
add_action( 'widgets_init', 'register_workschedule_widget' );