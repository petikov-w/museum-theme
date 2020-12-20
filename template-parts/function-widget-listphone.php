<?php
/**
 * Добавление нового виджета ListPhone_Widget.
 */
class ListPhone_Widget extends WP_Widget {

	// Регистрация виджета используя основной класс
	function __construct() {
		// вызов конструктора выглядит так:
		// __construct( $id_base, $name, $widget_options = array(), $control_options = array() )
		parent::__construct(
			'listphone_widget', // ID виджета, если не указать (оставить ''), то ID будет равен названию класса в нижнем регистре: socialnetwork
			__('Список телефонов', 'museum'),
			array( 'description' => __('Список телефонов', 'museum'), 'classname' => 'widget-listphone',)
		);

		// скрипты/стили виджета, только если он активен
		if ( is_active_widget( false, false, $this->id_base ) || is_customize_preview() ) {
			add_action('wp_enqueue_scripts', array( $this, 'add_listphone_widget_scripts' ));
			add_action('wp_head', array( $this, 'add_listphone_widget_style' ) );
		}
	}

	/**
	 * Вывод виджета во Фронт-энде
	 *
	 * @param array $args     аргументы виджета.
	 * @param array $instance сохраненные данные из настроек
	 */
	function widget( $args, $instance ) {

//		$title = $instance['title'];
		$phone_1 = $instance['phone_1'];
		$phone_2 = $instance['phone_2'];
		$phone_3 = $instance['phone_3'];
		$phone_4 = $instance['phone_4'];
		$icon_phone = get_template_directory_uri().'/assets/images/sprite.svg#phone';

		echo $args['before_widget'];

		if ( ! empty( $phone_1 ) ) {
			echo '<div class="set-phone">';

			echo '<div class="clock-title"><svg width="15" height="15" class="icon icon-phone">
                  <use xlink:href="' . $icon_phone . '"></use></svg><a href="tel:'. $phone_1 .
                                  '"><span class="phone-1">' . $phone_1 . '</span></a></div>';

			if ( ! empty( $phone_2 ) ) {
				echo '<a href="tel:'. $phone_2 . '"><span class="phone-n">' . $phone_2 . '</span></a>';
			}
			if ( ! empty( $phone_3 ) ) {
				echo '<a href="tel:'. $phone_3 . '"><span class="phone-n">' . $phone_3 . '</span></a>';
			}
			if ( ! empty( $phone_4 ) ) {
				echo '<a href="tel:'. $phone_4 . '"><span class="phone-n">' . $phone_4 . '</span></a>';
			}
			echo '</div>';
		}

		echo $args['after_widget'];
	}

	/**
	 * Админ-часть виджета
	 *
	 * @param array $instance сохраненные данные из настроек
	 */
	function form( $instance ) {
//		$title = @ $instance['title'] ?: __('Заголовок по умолчанию', 'museum');
		$phone_1 = @ $instance['phone_1'] ?: '';
		$phone_2 = @ $instance['phone_2'] ?: '';
		$phone_3 = @ $instance['phone_3'] ?: '';
		$phone_4 = @ $instance['phone_4'] ?: '';
		?>
<!--		<p>-->
<!--			<label for="--><?php //echo $this->get_field_id( 'title' ); ?><!--">--><?php //_e( 'Заголовок:' , 'museum'); ?><!--</label>-->
<!--			<input class="widefat" id="--><?php //echo $this->get_field_id( 'title' ); ?><!--" name="--><?php
//			echo $this->get_field_name( 'title' ); ?><!--" type="text" value="--><?php //echo esc_attr( $title ); ?><!--">-->
<!--		</p>-->
		<p>
			<label for="<?php echo $this->get_field_id( 'phone_1' ); ?>"><?php _e( 'Номер 1-го телефона:' , 'museum' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'phone_1' ); ?>" name="<?php
			echo $this->get_field_name( 'phone_1' ); ?>" type="text" value="<?php echo esc_attr( $phone_1 ); ?>">
		</p>
        <p>
            <label for="<?php echo $this->get_field_id( 'phone_2' ); ?>"><?php _e( 'Номер 2-го телефона:' , 'museum' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'phone_2' ); ?>" name="<?php
			echo $this->get_field_name( 'phone_2' ); ?>" type="text" value="<?php echo esc_attr( $phone_2 ); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'phone_3' ); ?>"><?php _e( 'Номер 3-го телефона:' , 'museum' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'phone_3' ); ?>" name="<?php
			echo $this->get_field_name( 'phone_3' ); ?>" type="text" value="<?php echo esc_attr( $phone_3 ); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'phone_4' ); ?>"><?php _e( 'Номер 4-го телефона:' , 'museum' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'phone_4' ); ?>" name="<?php
			echo $this->get_field_name( 'phone_4' ); ?>" type="text" value="<?php echo esc_attr( $phone_4 ); ?>">
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
//		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['phone_1'] = ( ! empty( $new_instance['phone_1'] ) ) ? strip_tags( $new_instance['phone_1'] ) : '';
		$instance['phone_2'] = ( ! empty( $new_instance['phone_2'] ) ) ? strip_tags( $new_instance['phone_2'] ) : '';
		$instance['phone_3'] = ( ! empty( $new_instance['phone_3'] ) ) ? strip_tags( $new_instance['phone_3'] ) : '';
		$instance['phone_4'] = ( ! empty( $new_instance['phone_4'] ) ) ? strip_tags( $new_instance['phone_4'] ) : '';
		return $instance;
	}

	// скрипт виджета
	function add_listphone_widget_scripts() {
		// фильтр чтобы можно было отключить скрипты
		if( ! apply_filters( 'show_my_widget_script', true, $this->id_base ) )
			return;

		$theme_url = get_stylesheet_directory_uri();

		wp_enqueue_script('my_widget_script', $theme_url .'/my_widget_script.js' );
	}

	// стили виджета
	function add_listphone_widget_style() {
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
// конец класса ListPhone_Widget

// регистрация ListPhone_Widget в WordPress
function register_listphone_widget() {
	register_widget( 'ListPhone_Widget' );
}
add_action( 'widgets_init', 'register_listphone_widget' );