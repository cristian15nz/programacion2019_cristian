using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using MySql.Data.MySqlClient;

namespace Registro
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        public void conexionBaseDatos()
        {
            string connectionString = "datasource=127.0.0.1;port=3306;username=root;password=;database=github;";

            // Prepara la conexión
            MySqlConnection databaseConnection = new MySqlConnection(connectionString);

            // Abre la base de datos
            databaseConnection.Open();
        }

        private void SaveUser(string nombre, string correo, string username, string password, string bio)
        {
            string connectionString = "datasource=127.0.0.1;port=3306;username=root;password=;database=github;";
            var query = String.Format("INSERT INTO usuarios (nombre, correo, username, password, bio) VALUES (\"{0}\", \"{1}\", \"{2}\", \"{3}\", \"{4}\") ", nombre, correo, username, password, bio);

            MySqlConnection databaseConnection = new MySqlConnection(connectionString);
            MySqlCommand commandDatabase = new MySqlCommand(query, databaseConnection);
            commandDatabase.CommandTimeout = 60;

            try
            {
                databaseConnection.Open();
                MySqlDataReader myReader = commandDatabase.ExecuteReader();

                MessageBox.Show("Usuario insertado satisfactoriamente");

                databaseConnection.Close();
            }
            catch (Exception ex)
            {
                // Mostrar cualquier error
                MessageBox.Show(ex.Message);
            }
        }

        private void button1_Click(object sender, EventArgs e)
        {
            // Capturar los datos
            var nombre = txtNombre.Text;
            var correo = txtCorreo.Text;
            var username = txtUsername.Text;
            var password = txtPassword.Text;
            var bio = txtBio.Text;

            // Validar los datos
            if (string.IsNullOrEmpty(nombre))
            {
                MessageBox.Show("El nombre no puede estar vacío.");
                txtNombre.Focus();
                return;
            }

            // Validar el correo
            if (string.IsNullOrEmpty(correo))
            {
                MessageBox.Show("El correo no puede estar vacío.");
                txtCorreo.Focus();
                return;
            }

            // Validar el nombre de usuario
            if (string.IsNullOrEmpty(username))
            {
                MessageBox.Show("El nombre de usuario no puede estar vacío.");
                txtUsername.Focus();
                return;
            }

            // Validar la contraseña
            if (string.IsNullOrEmpty(password))
            {
                MessageBox.Show("La contraseña no puede estar vacía.");
                txtPassword.Focus();
                return;
            }

            // Preparar el query
            /* var query = @"INSERT INTO usuarios
            (nombre, correo, username, password, bio)
            VALUES
            (\"Cristian\", \"co\", \"\", \"\", \"\")";
            */

            // Concatenarle el gmail.com
            correo += "@gmail.com";

            SaveUser(nombre, correo, username, password, bio);

            // Exito
            MessageBox.Show("Usuario registrado");

            // Vaciar el formulario cuando se registre el usuario
            txtNombre.Text = "";
            txtCorreo.Text = "";
            txtUsername.Text = "";
            txtPassword.Text = "";
            txtBio.Text = "";
          

        }
    }
}
