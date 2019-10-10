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

        private void FormConfigure_Load(object sender, EventArgs e)
        {

        }

        private void textBox1_TextChanged(object sender, EventArgs e)
        {
            lblCommit.Text = txtName.Text + " commited 30 minutes ago";
        }
    }
}
