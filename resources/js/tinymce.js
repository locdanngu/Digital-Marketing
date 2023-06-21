import tinymce from 'tinymce/tinymce';
import 'tinymce/themes/silver/theme';
import 'tinymce/plugins/lists';
import 'tinymce/plugins/link';
import 'tinymce/plugins/image';

tinymce.init({
  selector: 'textarea',
  plugins: 'lists link image',
  toolbar: 'undo redo | bold italic | bullist numlist | link image'
});
