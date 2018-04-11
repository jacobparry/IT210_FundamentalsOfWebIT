<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Default.aspx.cs" Inherits="_Default" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
    <div>
        Welcome,
        <asp:Label ID="Label3" runat="server" Text="Label"></asp:Label>
        <br />
        Email:
        <asp:Label ID="Label4" runat="server" Text="Label"></asp:Label>
        <br />
        <br />
        Please browse for an image: <asp:Label ID="Label5" runat="server" Text=""></asp:Label>
        <br />
        <asp:FileUpload ID="FileUpload1" runat="server" />
        <br />
        <br />
        Please Enter the Text you want:
        <asp:TextBox ID="TextBox4" runat="server"></asp:TextBox>
        <br />
        Please Enter 1 Unique word:
        <asp:TextBox ID="TextBox5" runat="server"></asp:TextBox>
        <br />
        Please Select the Filter you would like:
        <asp:RadioButtonList ID="RadioButtonList1" runat="server">
            <asp:ListItem Value="0">None</asp:ListItem>
            <asp:ListItem Value="1">Sepia</asp:ListItem>
            <asp:ListItem Value="2">Grayscale</asp:ListItem>
            <asp:ListItem Value="3">Oil Painting</asp:ListItem>
        </asp:RadioButtonList>
        <br />
        <br />
        <asp:Image ID="Image1" runat="server" />
        <br />
        <br />
    </div>
    <div>
        <asp:Button ID="Button" runat="server" Text="Submit" OnClick="Button_Click" />
    </div>
    </form>
</body>
</html>
