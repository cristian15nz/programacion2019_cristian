using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace GitHub_Desktop
{
    public partial class FormConfigure : Form
    {
        public FormConfigure()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            // Llamar al formulario FormConfigure
            var formularioFormMake = new FormMake();

            // Mostrar el formulario
            formularioFormMake.Show();
        }
    }
}
