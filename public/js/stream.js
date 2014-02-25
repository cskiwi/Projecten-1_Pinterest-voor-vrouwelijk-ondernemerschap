/**
 * Created by Glenn on 2/25/14.
 */
$('#filter_boards > a').click(function(){
    var $this = $(this), val = $this.attr('filter-data');
    $('.post').hide();
    $('.post[filter-data=' + val + ']').show();
});