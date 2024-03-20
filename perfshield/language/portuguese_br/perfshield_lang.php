<?php

defined('BASEPATH') or exit('No direct script access allowed');

// Nome do Módulo
$lang['perfshield'] = 'PerfShield';

// Links da Barra Lateral
$lang['perfshield_dashboard'] = 'Painel';
$lang['brute_force'] = 'Força Bruta';

// Página do Painel
$lang['failed_login_attempts_logs'] = 'Registros de Tentativas de Login Falhadas';
$lang['clear_log'] = 'Limpar Log';
$lang['ip'] = 'IP';
$lang['last_failed_attempt'] = 'Última Tentativa Falhada';
$lang['failed_attempts_count'] = 'Contagem de Tentativas Falhadas';
$lang['lockouts_count'] = 'Contagem de Bloqueios';

// Configurações de Força Bruta
$lang['brute_force_settings'] = 'Configurações de Força Bruta';
$lang['max_retries'] = 'Máximo de Retentativas';
$lang['max_failed_attempts_allowed_before_lockout'] = 'Máximo de tentativas falhadas permitidas antes do bloqueio';
$lang['lockout_time'] = 'Tempo de Bloqueio';
$lang['in_minutes'] = 'em minutos';
$lang['max_lockouts'] = 'Máximo de Bloqueios';
$lang['extend_lockout'] = 'Estender Bloqueio';
$lang['in_hours'] = 'em horas';
$lang['extend_lockout_time_after_max_lockouts'] = 'Estender tempo de bloqueio após o máximo de bloqueios';
$lang['reset_retries'] = 'Resetar Retentativas';
$lang['email_notification'] = 'Notificação por E-mail';
$lang['after'] = 'Após';
$lang['no_of_lockouts'] = 'número de bloqueios';
$lang['lockouts'] = 'bloqueios';
$lang['0_to_disable_email_notifications'] = '0 para desativar notificações por e-mail';
$lang['save_settings'] = 'Salvar Configurações';
$lang['bf_settings_updated'] = 'Configurações de força bruta atualizadas com sucesso.';
$lang['blacklist_ip_email'] = 'Configurações de IP/Email na Lista Negra';
$lang['blacklist'] = 'Lista Negra';
$lang['one_ip_or_ip_range_per_line'] = 'Um IP ou faixa de IP (1.2.3.4-5.6.7.8) por linha';
$lang['blacklist_ip'] = 'IP na Lista Negra';
$lang['blacklist_email'] = 'E-mail na Lista Negra';
$lang['list_updated_success'] = 'Lista de IP/Usuário atualizada com sucesso.';
$lang['ip_address'] = 'Endereço de IP';
$lang['actions'] = 'Ações';
$lang['list_of_blacklist_ip'] = 'Lista de IP na Lista Negra';
$lang['list_of_blacklist_emails'] = 'Lista de E-mails na Lista Negra';
$lang['removed_user_from_the_list'] = 'Usuário removido da lista';
$lang['edit_ip_address'] = 'Editar Endereço de IP';
$lang['update'] = 'Atualizar';
$lang['ip_updated'] = 'Endereço de IP atualizado com sucesso.';
$lang['user_ip_removed'] = 'IP/Usuário removido.';
$lang['login_access_denied'] = 'Acesso negado. Sua conta foi bloqueada. Por favor, entre em contato com o administrador.';
$lang['add_ip_to_blacklist'] = 'Adicionar IP à Lista Negra';
$lang['add_email_to_blacklist'] = 'Adicionar E-mail à Lista Negra';
$lang['email_address'] = 'Endereço de E-mail';
$lang['ip_added_to_blacklist'] = 'Endereço de IP foi adicionado à lista negra.';
$lang['email_added_to_blacklist'] = 'Endereço de e-mail foi adicionado à lista negra.';
$lang['ip_removed_from_blacklist'] = 'Endereço de IP foi removido da lista negra.';
$lang['email_removed_from_blacklist'] = 'Endereço de e-mail foi removido da lista negra.';
$lang['country'] = 'País';
$lang['country_code'] = 'Código do País';
$lang['isp'] = 'ISP';
$lang['mobile'] = 'Móvel';
$lang['one_email_address_per_line'] = 'Digite um endereço de e-mail por linha';
$lang['ip_address_already_exists'] = 'Este Endereço de IP já existe';
$lang['email_address_already_exists'] = 'Este Endereço de E-mail já existe';
$lang['login_expiry_for_staff'] = 'Expiração de Login para Funcionários';
$lang['user_inactivity'] = 'Tempo de Inatividade do Usuário';
$lang['user_inactivity_description'] = '0 para desativar tempo de inatividade do usuário';
$lang['send_mail_if_ip_is_different'] = 'Enviar notificação por e-mail ao administrador se o funcionário fizer login de um endereço de IP diferente?';
$lang['select_staff'] = 'Selecionar Funcionário';
$lang['expiry_date'] = 'Data de Expiração';
$lang['set_expiry_date'] = 'Definir Data de Expiração';
$lang['user_expiry'] = 'Expiração do Usuário';
$lang['expiry_date_added'] = 'Expiração do usuário adicionada.';
$lang['expiry_date_removed'] = 'Data de expiração removida.';
$lang['update_expiry_date'] = 'Atualizar Data de Expiração';
$lang['you_account_has_been_locked'] = 'Sua conta foi bloqueada';
$lang['reset_session'] = 'Redefinir Sessão';
$lang['enter_your_credentials'] = 'Digite suas credenciais';
$lang['verify'] = 'Verificar';
$lang['incorrect_password'] = 'Senha Incorreta';
$lang['session_reset'] = 'Sua sessão foi redefinida, e agora você pode fazer login.';
$lang['user_not_found'] = 'Usuário não encontrado';
$lang['note'] = 'Nota';
$lang['settings_for_only_staff_login'] = 'Estas configurações são aplicáveis apenas no login do funcionário';
$lang['single_session_settings'] = 'Configurações de Sessão Única';
$lang['prevent_user_from_login_more_than_once'] = 'Impedir que um usuário faça login mais de uma vez';
$lang['single_session_settings_updated'] = 'Configuração atualizada.';
$lang['user_already_has_an_active_session'] = 'O usuário já tem uma sessão ativa';
$lang['prevent_user_tooltip'] = 'Impede que os usuários façam login em vários navegadores. Se a sessão anterior não for destruída, o usuário não poderá fazer login em um novo navegador. no entanto, o usuário pode redefinir a sessão anterior.';
$lang['is_mobile'] = 'É Móvel';
$lang['no'] = 'Não';
$lang['yes'] = 'Sim';
$lang['notice'] = 'Aviso';
$lang['clear_log_notice'] = 'Ao limpar os logs, todas as <b>regras</b> serão <b>resetadas</b>.';
$lang['logs_cleared'] = 'Todos os logs foram apagados.';
$lang['max_retries_tooltip'] = 'Número máximo de retentativas de login permitidas antes do bloqueio. Isso determina o número máximo de tentativas de login malsucedidas que um usuário pode fazer antes de ser bloqueado do sistema.';
$lang['lockout_time_tooltip'] = 'Duração do bloqueio em minutos. Isso especifica a quantidade de tempo que um usuário será impedido de tentar fazer login após atingir o número máximo de retentativas.';
$lang['max_lockouts_tooltip'] = 'Número máximo de bloqueios permitidos. Isso define o número máximo de vezes que um usuário pode ser bloqueado.';
$lang['extend_lockout_tooltip'] = 'Duração para estender o bloqueio em horas. Isso define o tempo adicional que será adicionado à duração do bloqueio se o usuário exceder o número máximo de bloqueios.';
$lang['reset_retries_tooltip'] = 'Duração para redefinir as retentativas em horas. Isso determina a duração do tempo para verificar tentativas de login malsucedidas.';
$lang['email_notification_tooltip'] = 'Especifica o número de bloqueios após o qual uma notificação por e-mail é enviada para o endereço de e-mail associado.';
$lang['user_inactivity_tooltip'] = 'Duração da inatividade permitida antes do logout automático. Isso define o limite de tempo para inatividade do usuário, após o qual ele será desconectado automaticamente por motivos de segurança.';
$lang['send_email_notification_to_admin_tooltip'] = 'Ativar notificação por e-mail para o administrador quando os membros da equipe fizerem login de um endereço de IP diferente. Isso ajuda a identificar acessos não autorizados potenciais e fornece uma camada extra de segurança.';
$lang['cron_job_setup_required'] = 'Este recurso requer configuração de cron job para funcionar corretamente.';
