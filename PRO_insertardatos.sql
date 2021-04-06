-- ================================================
-- Template generated from Template Explorer using:
-- Create Procedure (New Menu).SQL
--
-- Use the Specify Values for Template Parameters 
-- command (Ctrl-Shift-M) to fill in the parameter 
-- values below.
--
-- This block of comments will not be included in
-- the definition of the procedure.
-- ================================================
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
-- =============================================
-- Author:		<Author,,Name>
-- Create date: <Create Date,,>
-- Description:	<Description,,>
-- =============================================
CREATE PROCEDURE Proc_insertardatosdesktop 
	-- Add the parameters for the stored procedure here
	@idequipo bigint,
	@estado bit,
	@persona_ingreso varchar(50),
	@nombreequipo varchar(50),
	@marrca_desktop varchar(50),
	@modelo_desktop varchar(50),
	@servicetag_desktop varchar(50),
	@procesador_desktop varchar(50),
	@ram_desktop varchar(50),
	@discoduro_desktop varchar(50),
	@descripcion_desktop varchar(50)


AS
BEGIN


insert into inventario_inventario (idequipo, ciudad, fecha_ingreso, estado, persona_ingreso, nombreequipo, marcca_desktop, modelo_desktop, servicetag_desktop,procesador_desktop,ram_desktop, discoduro_desktop, descripcion_desktop)
							values(@idequipo,'SPS' , GETDATE(),@estado ,@persona_ingreso ,@nombreequipo ,@marrca_desktop ,@modelo_desktop ,@servicetag_desktop ,@procesador_desktop ,@ram_desktop ,@discoduro_desktop ,@descripcion_desktop)
 


END
GO
