<?xml version="1.0" encoding="ISO-8859-1"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">

<xsl:output method="html" />

<xsl:template match="/">
    <xsl:apply-templates />
</xsl:template>

<xsl:template match="*[starts-with(name(), 'xmldata')]">
    <xsl:element name="form">
        <xsl:attribute name="name"><xsl:value-of select="name(.)" /></xsl:attribute>
        <table>
            <tr>
                <xsl:apply-templates />
            </tr>
        </table>
    </xsl:element>
</xsl:template>

<xsl:template match="record">
    <xsl:apply-templates />
</xsl:template>

<xsl:template match="*[starts-with(name(), 'property')]">
    <td>
        <xsl:value-of select="name(.)" />
    </td>
    <td>
        <xsl:element name="input">
            <xsl:attribute name="type">text</xsl:attribute>
            <xsl:attribute name="name"><xsl:value-of select="name(.)" /></xsl:attribute>
        </xsl:element>
    </td>
</xsl:template>