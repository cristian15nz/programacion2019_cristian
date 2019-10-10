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
    public partial class FormSignIn : Form
    {
        public FormSignIn()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            // Usamos el siguiente var
            var formularioFormConfigure = new FormConfigure();

            // Mostramos el formulario
            formularioFormConfigure.Show();
        }

        private void button2_Click(object sender, EventArgs e)
        {
            // Cerramos el formulario
            this.Close();
        }

        private void linkLabel1_LinkClicked(object sender, LinkLabelLinkClickedEventArgs e)
        {
            System.Diagnostics.Process.Start("https://github.com/password_reset");
        }

        private void linkLabel2_LinkClicked(object sender, LinkLabelLinkClickedEventArgs e)
        {
            System.Diagnostics.Process.Start("https://github.com/login");
        }

        private void txtUsername_TextChanged(object sender, EventArgs e)
        {
            var longitudUsername = txtUsername.Text.Length;
            var longitudPassword = txtPassword.Text.Length;

            if ( longitudUsername > 0 && longitudPassword > 0 ) {
                btnSignIn.Enabled = true;
            }
            else
            {
                btnSignIn.Enabled = false;
            }


        }

        private void txtPassword_TextChanged(object sender, EventArgs e)
        {
            var longitudUsername = txtUsername.Text.Length;
            var longitudPassword = txtPassword.Text.Length;

            if (longitudUsername > 0 && longitudPassword > 0)
            {
                btnSignIn.Enabled = true;
            }
            else
            {
                btnSignIn.Enabled = false;
            }
        }
    }
}
