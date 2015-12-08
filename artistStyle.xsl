<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">


 <xsl:template match="/">
    <html>
  <body>
  <h2>Painter</h2>
    <table border="1">
      <tr bgcolor="#996767">
        <th style="text-align:left">Title</th>
        <th style="text-align:left">Artist</th>
      </tr>
      <xsl:for-each select="gallery/artist/painter">
      <tr>
        <td><xsl:value-of select="title"/></td>
        <td><xsl:value-of select="name"/></td>
      </tr>
      </xsl:for-each>
    </table>
	
	<h2>Photographer</h2>
    <table border="1">
      <tr bgcolor="#996767">
        <th style="text-align:left">Name</th>
        <th style="text-align:left">Country</th>
      </tr>
      <xsl:for-each select="gallery/artist/photographer">
      <tr>
        <td><xsl:value-of select="name"/></td>
        <td><xsl:value-of select="country"/></td>

      </tr>
      </xsl:for-each>
    </table>
	
	
	
	
	
	
	
	
	
	
	<h2>Sculptor</h2>
    <table border="1">
      <tr bgcolor="#996767">
        <th style="text-align:left">Title</th>
        <th style="text-align:left">Artist</th>
      </tr>
      <xsl:for-each select="gallery/artist/sculptor">
      <tr>
        <td><xsl:value-of select="title"/></td>
        <td><xsl:value-of select="name"/></td>
      </tr>
      </xsl:for-each>
    </table>
	
  </body>
  </html>
 </xsl:template>

</xsl:stylesheet>
