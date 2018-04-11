using System;

using System.Drawing;
using System.IO;
using System.Diagnostics;
using AForge.Imaging.Filters;
using MySql.Data.MySqlClient;
using System.Web.UI.HtmlControls;

using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;



public partial class _Default : System.Web.UI.Page
{

    protected void Page_Load(object sender, EventArgs e)
    {
        Label3.Text = Request.QueryString["username"];
        Label4.Text = Request.QueryString["email"];
        
    }

    protected void Button_Click(object sender, EventArgs e)
    {
        if (FileUpload1.HasFile)
        {
            FileUpload1.SaveAs(Server.MapPath("~/images/") + FileUpload1.FileName);
            Label5.Text = "File name: " + FileUpload1.PostedFile.FileName;

            String path;
            String pathURL;
            using (System.Drawing.Image tempImage = System.Drawing.Image.FromFile("C:\\inetpub\\wwwroot\\images\\" + FileUpload1.FileName))
            {

                // Create string to draw.
                String drawString = TextBox4.Text;

                // Create font and brush.
                Font drawFont = new Font("Impact", 100);
                SolidBrush drawBrush = new SolidBrush(Color.Red);

                // Create point for upper-left corner of drawing.
                PointF drawPoint = new PointF(75.0F, 25.0F);

                // Draw string to screen.
                using (Graphics g = Graphics.FromImage(tempImage))
                {
                    g.DrawString(drawString, drawFont, drawBrush, drawPoint);

                }
                using (var m = new MemoryStream())
                {
                    String time_stamp = Stopwatch.GetTimestamp().ToString();
                    String uniqueName = TextBox5.Text;
                    path = Server.MapPath("/images/") + uniqueName + time_stamp + FileUpload1.FileName;
                    pathURL = "/images/" + uniqueName + time_stamp + FileUpload1.FileName;


                    new Bitmap(tempImage, 300, 300).Save(path, System.Drawing.Imaging.ImageFormat.Jpeg);
                    Image1.ImageUrl = pathURL;

                    // create a filter
                    Grayscale GrayFilter = new Grayscale(0.2125, 0.7154, 0.0721);
                    Sepia SepiaFilter = new Sepia();
                    OilPainting OilFilter = new OilPainting(15);


                    // apply the filter
                    Bitmap test = new Bitmap(tempImage, 300, 300);
                    if (RadioButtonList1.SelectedIndex == 0)
                    {

                    }
                    else if (RadioButtonList1.SelectedIndex == 1)
                    {
                        Bitmap sepiaImage = SepiaFilter.Apply(test);
                        sepiaImage.Save(path, System.Drawing.Imaging.ImageFormat.Jpeg);
                        Image1.ImageUrl = pathURL;
                    }
                    else if (RadioButtonList1.SelectedIndex == 2)
                    {
                        Bitmap grayImage = GrayFilter.Apply(test);
                        grayImage.Save(path, System.Drawing.Imaging.ImageFormat.Jpeg);
                        Image1.ImageUrl = pathURL;
                    }
                    else if (RadioButtonList1.SelectedIndex == 3)
                    {
                        Bitmap oilImage = OilFilter.Apply(test);
                        oilImage.Save(path, System.Drawing.Imaging.ImageFormat.Jpeg);
                        Image1.ImageUrl = pathURL;
                    }
                    

                }

            }



            ////These is where I submit the information to the database.
            string qemail = Request.QueryString["email"];
            string memepath = pathURL;
            string memetext = TextBox4.Text;
            string timestamp = Stopwatch.GetTimestamp().ToString();
            int baseLikes = 0;
            int uploaded = 0;

            string connectionString = "uid=myusername;server=192.168.12.136;port=3306;database=it210b;password=123456;";

            MySqlConnection connection = new MySqlConnection(connectionString);
            connection.Open();

            ////This is the command for grabbing the userID
            
            MySqlCommand IDCommand = new MySqlCommand();
            IDCommand.CommandText = "Select userId From it210b.users WHERE email = @qemail";
            IDCommand.Parameters.AddWithValue("@qemail", qemail);
            IDCommand.Connection = connection;
            string userID = IDCommand.ExecuteScalar().ToString();

            ////This is where I insert image info into DB. You have to assign your command a connection to use.
            MySqlCommand command = new MySqlCommand();
            command.Connection = connection;
            command.CommandText = "Insert INTO it210b.images (imagePath, altText, userId, numLikes, uploaded) VALUES (@imagePath, @altText, @userId, @numLikes, @uploaded )";
            command.Prepare();

            command.Parameters.AddWithValue("@imagePath", memepath);
            command.Parameters.AddWithValue("@altText", memetext);
            command.Parameters.AddWithValue("@userId", userID);
            command.Parameters.AddWithValue("@numLikes", baseLikes);
            command.Parameters.AddWithValue("@uploaded", uploaded);

            command.ExecuteNonQuery();

            HtmlMeta meta = new HtmlMeta();
            meta.HttpEquiv = "Refresh";
            meta.Content = "2;url=http://192.168.12.136:1337/memes";
            this.Page.Controls.Add(meta);

        }
        else
        {
            Label5.Text = "No file found. Please select a file and try again.";
        }

       
    }

    protected void Upload(object sender, EventArgs e)
    {
       
    }

    protected void TextBox3_TextChanged(object sender, EventArgs e)
    {

    }

    protected void TextBox2_TextChanged(object sender, EventArgs e)
    {

    }

    protected void TextBox1_TextChanged(object sender, EventArgs e)
    {

    }

    protected void Page_Load(object sender, EventArgs e)
    {

    }

    protected void Button_Click(object sender, EventArgs e)
    {


        string memepath = TextBox1.Text;
        string memetext = TextBox2.Text;
        string userID = TextBox3.Text;

        string connectionString = "uid=myusername;server=192.168.12.136;port=3306;database=it210b;password=123456;";
        MySqlConnection connection = new MySqlConnection(connectionString);
        connection.Open();

        MySqlCommand command = new MySqlCommand();
        command.Connection = connection;
        command.CommandText = "Insert INTO it210b.images (imagePath, altText, userId) VALUES (@imagePath, @altText, @userId)";
        command.Prepare();

        command.Parameters.AddWithValue("@imagePath", memepath);
        command.Parameters.AddWithValue("@altText", memetext);
        command.Parameters.AddWithValue("@userId", userID);

        command.ExecuteNonQuery();
    }


    protected void TextBox1_TextChanged(object sender, EventArgs e)
    {

    }

    protected void TextBox2_TextChanged(object sender, EventArgs e)
    {

    }

    protected void TextBox3_TextChanged(object sender, EventArgs e)
    {

    }

    {

    }

    protected void Button_Click(object sender, EventArgs e)
    {


        string memepath = TextBox1.Text;
        string memetext = TextBox2.Text;
        string userID = TextBox3.Text;

        string connectionString = "uid=myusername;server=192.168.12.136;port=3306;database=it210b;password=12346;";
        MySqlConnection connection = new MySqlConnection(connectionString);
        connection.Open();

        MySqlCommand command = new MySqlCommand();
        command.Connection = connection;
        command.CommandText = "Insert INTO it210b.images (imagePath, altText, userId) VALUES (@imagePath, @altText, @userId)";
        command.Prepare();

        command.Parameters.AddWithValue("@imagePath", memepath);
        command.Parameters.AddWithValue("@altText", memetext);
        command.Parameters.AddWithValue("@userId", userID);

        command.ExecuteNonQuery();
    }


    protected void TextBox1_TextChanged(object sender, EventArgs e)
    {

    }

    protected void TextBox2_TextChanged(object sender, EventArgs e)
    {

    }

    protected void TextBox3_TextChanged(object sender, EventArgs e)
    {

    }

}